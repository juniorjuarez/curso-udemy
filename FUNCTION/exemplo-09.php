<?php 

$hierarquia = array (
	//INICIO CEO
	array(
		'nome_cargo' => 'CEO',
		'subordinados' =>
		 array(
			//Inicio: Diretor Comercial
			array(
				'nome_cargo'=>'Diretor Comercial',
				'subordinados' => array(
					//Inicio: Gerente de Vendas
					array(
						'nome_cargo'=>'Gerente de Vendas',

						)//Fim: Gerente de Vendas

				)//Fim: Subordinados diretor comercial

			),//Fim: Diretor Comercial
			//Inicio: Diretor Financeiro
			array(
				'nome_cargo'=>'Diretor Financeiro',
				'subordinados' => array(
					//Inicio: Gerente contas a  Vendas
					array(
						'nome_cargo'=>'Gerente de Contas a Pagar',
						'subordinados'=>array(
							array(

							//Inicio: Supervisor de Pagamentos
							'nome_cargo'=>'Supervisor de Pagamentos')
						)
							//Fim: Supervidor de Pagamentos


					),//Fim: Gerente de contas a pagar
					//Inuicio: Gerente de compra
					array(
						'nome_cargo'=>'Gerente de Compra',
						'subordinados'=>array(
							array(
							'nome_cargo'=>'Supervisor de vendas')
						)
							//Fim: Supervidor de Vendas

					)//Fim: Gerente de Compras
				
				)//Fim: Subordinados diretor Financeiro
			
			)//Fim: Diretor Financeiro
		

		)//Fim: CEO Subordinados

	)//FIM: CEO
);




function exibe($cargos){

	$html = '<ul>';

	foreach ($cargos as $cargo) {
		
		$html .= "<li>";

			$html .= $cargo['nome_cargo'];
		
			if(isset($cargo['subordinados']) && count($cargo['subordinados']) >0 ){

				$html .= exibe($cargo['subordinados']);
			}
	
		$html .="</li>";

		}

	$html .='</ul>';

	return $html;

}

echo exibe($hierarquia);





?>