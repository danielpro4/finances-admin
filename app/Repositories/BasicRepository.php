<?php
namespace FinancesAdmin\Repositories;


use Exception;
use FinancesAdmin\Repositories\Contracts\RepositoryInterface;
use Illuminate\Container\Container as App;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BasicRepository
 * @package App\Repositories
 */
abstract class BasicRepository implements RepositoryInterface
{
    private $app;
    protected $model;

    /**
     * BasicRepository constructor.
     *
     * @param App $app
     */
    public function __construct(App $app) {
        $this->app = $app;
        $this->makeModel();
    }

    /**
     * Especifica o Model que será utilizado.
     *
     * @return mixed
     */
    abstract function model();

    /**
     * Instancia o model.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     * @throws Exception - Retorna um erro caso o model não seja uma instância de Illuminate\\Database\\Eloquent\\Model
     */
    public function makeModel() {
        $model = $this->app->make($this->model());

        if (!$model instanceof Model)
            throw new Exception("Class {$this->model()} must be an instance of Illuminate\\Database\\Eloquent\\Model");

        return $this->model = $model;
    }

    /**
     * Busca todos e filtra somente as colunas que forem passadas.
     *
     * @param array $columns
     * @return mixed
     */
    public function all($columns = array('*')) {
        return $this->model->get($columns);
    }

    /**
     * Busca os objetos paginados de acordo com o parâmetros informados.
     *
     * @param int $perPage
     * @param array $columns
     * @return mixed
     */
    public function paginate($perPage = 15, $columns = array('*')) {
        return $this->model->paginate($perPage, $columns);
    }

    /**
     * Grava um objeto no banco.
     *
     * @param array $data
     * @return mixed
     */
    public function create(array $data) {
        return $this->model->create($data);
    }

    /**
     * Atualiza um objeto no banco.
     *
     * @param array $data
     * @param $id
     * @param string $attribute
     * @return mixed
     */
    public function update(array $data, $id, $attribute="id") {
        return $this->model->where($attribute, '=', $id)->update($data);
    }

    /**
     * Deleta um objeto do banco.
     *
     * @param $id
     * @return mixed
     */
    public function delete($id) {
        return $this->model->destroy($id);
    }

    /**
     * Filtra os objetos pelo id e por colunas.
     *
     * @param $id
     * @param array $columns
     * @return mixed
     */
    public function find($id, $columns = array('*')) {
        return $this->model->find($id, $columns);
    }

    /**
     * Busca por um atributo sendo igual a um valor e por colunas.
     *
     * @param $attribute
     * @param $value
     * @param array $columns
     * @return mixed
     */
    public function findBy($attribute, $value, $columns = array('*')) {
        return $this->model->where($attribute, '=', $value)->first($columns);
    }
}