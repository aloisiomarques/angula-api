import { HttpContext } from '@angular/common/http';
import { Component, OnInit } from '@angular/core';
import { Cursos } from './cursos';
import { CursosService } from './cursos.service';

@Component({
  selector: 'app-cursos',
  templateUrl: './cursos.component.html',
  styleUrls: ['./cursos.component.css']
})
export class CursosComponent implements OnInit {

  //incializa o vertor
  vetor!: Cursos[];

  //instance classe
  curso = new Cursos();

  //construtor
  constructor(private curso_servico: CursosService) { }

  //inicializador
  ngOnInit(){
    this.selecao();

  }
  //cadastro

  cadastro(){

  }

  //seleção
  selecao(){
    this.curso_servico.obterCursos().subscribe(
      (res: Cursos[]) => {
        this.vetor = res;
      }
    )
  }

  //Alterar
  alterar(){

  }

  //remover
  remover(){

  }

}
