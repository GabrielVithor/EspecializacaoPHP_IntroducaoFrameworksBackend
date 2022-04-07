<?php
   # $xml = simplexml_load_file('arquivo.xml'); #leitura de aruivos xml

#    print_r($xml);

    #echo $xml->pessoa[1]->nome;
    #echo "<hr>";
    #echo $xml->pessoa[0]->nome;

    class criarXML{
        function __construct($array1,$val1,$val2,$indice1,$indice2)
        {
            $this->array1 = $array1;
            $this->val1 = $val1;
            $this->val2 = $val2;
            $this->indice1 = $indice1;
            $this->indice2 = $indice2;
        }

        public function setxml(){
            $array_xml = [$this->array1=>[$this->val1=>$this->indice1,$this->val2=>$this->indice2]];

            $xml = new SimpleXMLElement("<$this->array1/>");
            array_walk_recursive($array_xml,[$xml,'addChild']);
            $content = file_get_contents('arquivo.xml');
            $content_xml =  $xml->asXML();
            $arquivo = file_put_contents('arquivo.xml',$content.$content_xml);

            return $arquivo;
        }  
    }
    
    $criar_xml = new criarXML('pessoa','gabriel','23','nome','idade');
    $criar_xml->setxml();
?>