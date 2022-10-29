import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';
import { map } from 'rxjs/operators';
import { Cursos } from './cursos';

@Injectable({
  providedIn: 'root'
})
export class CursosService {

  //Base URL

  url = "http://www.nazarick.com/api/php/";

  //Vetor

  vetor: Cursos[] = [];

  constructor(private http: HttpClient) { }

  //Obeter Todos os cursos

  obterCursos(): Observable<Cursos[]> {
    return this.http.get(this.url+"listar.php").pipe(
      map((res: any) => {
        this.vetor = res['cursos'];
        return this.vetor;
      })
    )
  }
}

