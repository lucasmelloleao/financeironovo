
@extends('layouts.painel.app')
@section('title', 'lancamento','parceiros','conta','despesareceita')
@section('content')





@if (isset($lancamento)) 

<form class="form" method="post"  action="{{route('lancamento.update', $lancamento->id)}}">
    {!! method_field('PUT') !!}


    @else

    <form class="form" method="post"  action="{{url('/painel/lancamento/store')}}">
        @endif 




        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Lançamentos</h5>

                    </div>
                    <div class="ibox-content">
                        <div class="row col-lg-3">

                            {!! csrf_field() !!}


                            @if (isset($lancamento))                                 
                            
                             <div class="form-control col-lg-3">
                             
                             <div class="input-group date">
                                    <input name = "data" type="text" 
                                           value="{{$lancamento->data or old('data')}}"
                                           class="form-control datepicker" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                                
                                <select name="parceiro" class="selectpicker" data-live-search="true">
                                    @foreach ($parceiros as $parceiro) 
                                    @if ($lancamento->parceiro == $parceiro->id)
                                     <option selected value="{{$parceiro->id}}">{{$parceiro->nome}}</option>
                                    @else                                       
                                     <option value="{{$parceiro->id}}">{{$parceiro->nome}}</option>
                                    @endif
                                    @endforeach  
                                </select>

                             
                                
                            </div>

                            <select name="conta" class="selectpicker" data-live-search="true">
                                @foreach ($contas as $conta)  
                                @if ($lancamento->conta == $conta->id)	                         	
                                 <option selected value="{{$conta->id}}">{{$conta->nome}}</option>
                                @else 	                       
                                 <option value="{{$conta->id}}">{{$conta->nome}}</option>                                    
                                @endif      
                                @endforeach  
                            </select>

                            <div class="form-group">
                             <select name="despesareceita" class="selectpicker" data-live-search="true">
                                @foreach ($despesareceitas as $despesareceita)  
                                  @if ($lancamento->despesareceita == $despesareceita->id)
                                    <option selected value="{{$despesareceita->id}}" >{{$despesareceita->nome}}</option>
                                  @else
                                    <option          value="{{$despesareceita->id}}" >{{$despesareceita->nome}}</option>
                                  @endif 


                                                                                      
                                @endforeach  
                             </select>
                            </div>

                            <div class="form-group">
                            <input type="text" id="money" class="lg-col-12 form-control" name= "valor" placeholder="Valor do Lançamento"
                                   value="{{ number_format($lancamento->valor, 2, ',', '.')}}" >

                             </div>
                             
                            <div class="form-group">
                               <input type="text"  class="lg-col-12 form-control" name= "descricao" placeholder="Descrição" value="{{$lancamento->descricao}}" 
                            </div>

                          
                           @endif
                           
                           @if (!isset($lancamento))
                            <div class="form-group lg-col-6">  
                                <div class="input-group date">
                                    <input name = "data" type="text" 
                                           class="form-control datepicker" />
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                    </span>
                                </div>
                                <div class="form-group lg-col-6" >  </div>
                                <div class="form-group lg-col-6">  </div>
                            </div>
                            
                               <div class="form-group"> 
                                 <select name="parceiro" class="selectpicker" data-live-search="true">
                                 @foreach ($parceiros as $parceiro)  
                                 <option value="{{$parceiro->id}}">{{$parceiro->nome}}</option>
                                 @endforeach  
                             </select>
                             
    
                            <select name="conta" class="selectpicker" data-live-search="true">
                                @foreach ($contas as $conta)  
                                <option value="{{$conta->id}}">{{$conta->nome}}</option>
                                @endforeach  
                            </select>
                           
                            <select name="despesareceita" class="selectpicker" data-live-search="true">
                                @foreach ($despesareceitas as $despesareceita)  
                                  <option value="{{$despesareceita->id}}" >{{$despesareceita->nome}}</option>
                                @endforeach  
                            </select>
                            <div class="form-group"> 
                              <div class="row">
                               <input type="text"  class="form-control" name= "valor" placeholder="Valor do Lançamento"   >
                               <input type="text"  class="form-control" name= "descricao" placeholder="Descrição" 
                              </div>
                            </div>
                            </div>


                            @endif




                            <div class="panel-body ">
                                <button class="btn btn-primary">Salvar</buton>
                            </div>
                        </div>

                    </div>
                </div>
            </div>





        </div>











    </form> 


    <script>

        $('.datepicker').datepicker({
            format: "d/m/Y"


        });</script>








    @endsection

