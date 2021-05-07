<?php

include_once 'queries.php';

class EditCost{
    private $table = 'types_costs';
    private $query;

    function __construct($dataCost){
        $this->dataCost = $dataCost;
        $this->query = new Queries($this->table);
    }

    public function returnDataCost(){
        $row = $this->query;
        $arrayCost = ["column"=>"id_cost",
                    "value"=>$this->dataCost['id_cost']
        ];

        $rtaDataCost = $row->searchRowSimple($arrayCost);

        return $rtaDataCost;
    }
}