<?php
namespace evt\V1\Rest\VistaPaisEstado;
 
use Zend\Db\Adapter\AdapterInterface;
use Zend\Paginator\Adapter\ArrayAdapter;
 
class VistaPaisEstadoMapper
{
    protected $adapter;
    public function __construct(AdapterInterface $adapter)
    {
        $this->adapter = $adapter;
    }
    public function fetchAll($params)
    {
        $pais_id = $params['pais_id'];
        $sql = 'SELECT * FROM lugar_estado WHERE pais_id = ? ';
        $resultset = $this->adapter->query($sql, array($pais_id));
        $returnArray = array();

        foreach ($resultset as $result) {
            $returnArray[] = $result;
        }
        $adapter = new ArrayAdapter(($returnArray));

        $collection = new VistaPaisEstadoCollection($adapter);
        return $collection;
    }
}