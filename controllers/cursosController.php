<?php
class cursosController extends controller {

	public function __construct() {
		parent::__construct();
		$alunos = new Alunos();

		if(!$alunos->isLogged()) {
			header("Location: ".BASE."login");
		}
	}
	
	public function index() {
		header("Location: "+BASE);
	}

	public function entrar($id) {
		$dados = array(
			'info' => array(),
			'curso' => array(),
			'modulos' => array()
		);
		$alunos = new Alunos();
		$alunos->setAluno($_SESSION['lgaluno']);
		$dados['info'] = $alunos;

			$curso = new Cursos();
			$curso->setCurso($id);
			$dados['curso'] = $curso;

			$modulos = new Modulos();
			$dados['modulos'] = $modulos->getModulos($id);


			$this->loadTemplate('curso_entrar', $dados);
	
	}
	public function aula($id_aula){
		$dados = array(
			'info' => array(),
			'curso' => array(),
			'modulos' => array(),
			'aula_info'=>array()
		);
		$alunos = new Alunos();
		$alunos->setAluno($_SESSION['lgaluno']);
		$dados['info'] = $alunos;

			$aula = new Aulas();
			$id = $aula->getCursoDeAula($id_aula);

			$curso = new Cursos();
			$curso->setCurso($id);
			$dados['curso'] = $curso;

			$dados['aula_info'] = $aula->getAula($id_aula);

			

			$modulos = new Modulos();
			$dados['modulos'] = $modulos->getModulos($id);


			$this->loadTemplate('curso_aula_video', $dados);
	}


}