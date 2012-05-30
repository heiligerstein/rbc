<?

class Aluno extends AppModel {

    public $name = 'Aluno';

    public $validate = 	array(
        'id' => array(
    		array(
	            'rule' => 'notEmpty',
	        	'message' => 'Este campo não pode ser vazio.'
    		)
        )
    );

}

?>
