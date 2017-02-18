<?php

namespace FinancesAdmin\Http\Controllers;

use FinancesAdmin\Repositories\SpentRepository;
use FinancesAdmin\Util\DateUtil;
use FinancesAdmin\Util\MoneyUtil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SpentController extends Controller
{
    protected $repository;

    public function __construct(SpentRepository $spentRepository)
    {
        $this->repository = $spentRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $spents = $this->repository->paginate(5);

        return view('spent.index', compact('spents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('spent.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dueDate = DateUtil::fromStore($request->input('dueDate'));
        $paymentDate = '';
        if ($request->input('paymentDate')) {
            $paymentDate = DateUtil::fromStore($request->input('paymentDate'));
        }
        $money = MoneyUtil::fromStore($request->input('value'));

        $this->repository->create([
            'description' => $request->input('description'),
            'value'       => $money->getValue(),
            'dueDate'     => $dueDate->getDate(),
            'paymentDate' => $paymentDate->getDate(),
        ]);
        Session::flash(parent::SUCESSO, parent::INCLUSAO);

        return redirect()->route('spent.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $spent = $this->repository->find($id);

        return view('spent.edit', compact('spent'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $dueDate = DateUtil::fromStore($request->input('dueDate'));
        $paymentDate = '';
        if ($request->input('paymentDate')) {
            $paymentDate = DateUtil::fromStore($request->input('paymentDate'));
        }
        $money = MoneyUtil::fromStore($request->input('value'));

        $this->repository->update([
            'description' => $request->input('description'),
            'value'       => $money->getValue(),
            'dueDate'     => $dueDate->getDate(),
            'paymentDate' => $paymentDate->getDate(),
        ], $id);
        Session::flash(parent::SUCESSO, parent::ALTERACAO);

        return redirect()->route('spent.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->repository->delete($id);
        Session::flash(parent::SUCESSO, parent::EXCLUSAO);
        return redirect()->route('spent.index');
    }
}
