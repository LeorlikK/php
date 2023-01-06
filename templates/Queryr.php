<?php

class QueryBuilder
{
    public array $select = [];
    private array $from = [];
    private array $where = [];

    public function selectFunc(array $select):QueryBuilder
    {
        $this->select = $select;
        return $this;
    }

    public function fromFunc(array $select):QueryBuilder
    {
        $this->from = $select;
        return $this;
    }

    public function whereFunc(array $select):QueryBuilder
    {
        $this->where = $select;
        return $this;
    }

    public function get():string
    {
        return sprintf('SELECT %s FROM %s WHERE %s;',
        join(', ', $this->select),
        join(', ', $this->from),
        join('AND', $this->where),
        );
    }

}

$builder = new QueryBuilder();
echo $builder->selectFunc([1,2,3])->fromFunc([4,5,6])->whereFunc([7,8,9])->get();

