<template>
			<main class="main">
			<!-- Breadcrumb -->
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Escritorio</a></li>
            </ol>
            <div class="card">
            	<div class="card-header">
                    <i class="fa fa-align-justify"></i> Mesas
                        <button type="button" @click="abrirModal('mesa','create')" class="btn btn-secondary">
                        <i class="icon-plus"></i>&nbsp;Nuevo
                    </button>
                </div>
                <div class="card-body">
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <select class="form-control col-md-3" v-model="criterio">
                                      <option value="numero">Numero</option>
                                      <option value="piso">Piso</option>
                                      <option value="estado">Estado</option>
                                    </select>
                                    <input type="text" v-model="buscar" @keyup.enter="listarMesa(1,buscar,criterio)" class="form-control" placeholder="Texto a buscar">
                                    <button type="submit" @click="listarMesa(1,buscar,criterio)" class="btn btn-primary"><i class="fa fa-search"></i> Buscar</button>
                                </div>
                            </div>
                        </div>
                        <table class="table table-bordered table-striped table-sm">
                            <thead>
                                <tr>
                                	<th>Opciones</th>
                                    <th>Numero</th>
                                    <th>Piso</th>
                                    <th>estado</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="mesa in arrayMesa" :key="mesa.id" :class="[mesa.eliminado == '1' ? 'danger-row' : '']">
                                    <td>
                                        <button type="button" @click="abrirModal('mesa','update',mesa)" class="btn btn-warning btn-sm">
                                          <i class="icon-pencil"></i>
                                        </button> &nbsp;
                                        <template v-if="!mesa.eliminado">
                                            <button type="button" class="btn btn-danger btn-sm" @click="desactivarMesa(mesa.id)">
                                                <i class="icon-trash"></i>
                                            </button>
                                        </template>
                                        <template v-else>
                                            <button type="button" class="btn btn-info btn-sm" @click="activarMesa(mesa.id)">
                                                <i class="icon-check"></i>
                                            </button>
                                        </template>
                                    </td>
                                    <td v-text="mesa.numero"></td>
                                    <td v-text="mesa.piso"></td>
                                    <td>
                                        <div v-if="!mesa.estado">
                                            <span class="badge badge-success">Desocupado</span>
                                        </div>
                                        <div v-else>
                                            <span class="badge badge-danger">Ocupado</span>
                                        </div>
                                        
                                    </td>
                                </tr>                                
                            </tbody>
                        </table>
                        <nav>
                            <ul class="pagination">
                                <li class="page-item" v-if="pagination.current_page > 1">
                                    <a class="page-link" href="#" @click.prevent="cambiarPagina(pagination.current_page - 1,buscar,criterio)">Ant</a>
                                </li>
                                <li class="page-item" v-for="page in pagesNumber" :key="page" :class="[page == isActived ? 'active' : '']">
                                    <a class="page-link" href="#" @click.prevent="cambiarPagina(page,buscar,criterio)" v-text="page"></a>
                                </li>
                                <li class="page-item" v-if="pagination.current_page < pagination.last_page">
                                    <a class="page-link" href="#" @click.prevent="cambiarPagina(pagination.current_page + 1,buscar,criterio)">Sig</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
            </div>
            <!--Inicio del modal agregar/actualizar-->
            <div class="modal fade" tabindex="-1" :class="{'mostrar' : modal}" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-primary modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" v-text="tituloModal"></h4>
                            <button type="button" class="close" @click="cerrarModal()" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="text-input">Numero(*)</label>
                                    <div class="col-md-9">
                                        <input type="text" v-model="numero" class="form-control" placeholder="Numero de mesa">                                        
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="text-input">Piso</label>
                                    <div class="col-md-9">
                                        <select v-model="piso" class="form-control">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </select>                                        
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="text-input">Estado</label>
                                    <div class="col-md-9">
                                        <select v-model="estado" class="form-control">
                                            <option value="0">Desocupado</option>
                                            <option value="1">Ocupado</option>
                                        </select>                                        
                                    </div>
                                </div>
                                <div v-show="errorMesa" class="form-group row div-error">
                                    <div class="text-center text-error">
                                        <div v-for="error in errorMostrarMsjMesa" :key="error" v-text="error">

                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" @click="cerrarModal()">Cerrar</button>
                            <button type="button" v-if="tipoAccion==1" class="btn btn-primary" @click="registrarMesa()">Guardar</button>
                            <button type="button" v-if="tipoAccion==2" class="btn btn-primary" @click="actualizarMesa()">Actualizar</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!--Fin del modal-->
        	</main>
</template>
<script>
	export default {
		data (){
			return {
                numero : '',
                piso : '',
                estado : '',
                eliminado : '',
                id: '',
                arrayMesa : [],
                modal : 0,
                tituloModal : '',
                tipoAccion : 0,
                errorMesa : 0,
                errorMostrarMsjMesa : [],
                pagination : {
                    'total' : 0,
                    'current_page' : 0,
                    'per_page' : 0,
                    'last_page' : 0,
                    'from' : 0,
                    'to' : 0,
                },
                offset : 3,
                criterio : 'numero',
                buscar : ''
			}
		},
		 computed : {
            isActived: function(){
                return this.pagination.current_page;
            },
            //Calcula los elementos de la paginación
            pagesNumber: function() {
                if(!this.pagination.to) {
                    return [];
                }
                
                var from = this.pagination.current_page - this.offset; 
                if(from < 1) {
                    from = 1;
                }

                var to = from + (this.offset * 2); 
                if(to >= this.pagination.last_page){
                    to = this.pagination.last_page;
                }  

                var pagesArray = [];
                while(from <= to) {
                    pagesArray.push(from);
                    from++;
                }
                return pagesArray;             

            }
        },
        methods : {
        	 listarMesa (page,buscar,criterio){
                let me=this;
                var url= '/mesa?page=' + page + '&buscar='+ buscar + '&criterio='+ criterio;
                axios.get(url).then(function (response) {
                    var respuesta= response.data;
                    me.arrayMesa = respuesta.mesas.data;
                    me.pagination= respuesta.pagination;
                })
                .catch(function (error) {
                    console.log(error);
                });
            },
             cambiarPagina(page,buscar,criterio){
                let me = this;
                //Actualiza la página actual
                me.pagination.current_page = page;
                //Envia la petición para visualizar la data de esa página
                me.listarMesa(page,buscar,criterio);
            },
            registrarMesa(){
                if (this.validarMesa()){
                    return;
                }
                
                let me = this;

                axios.post('/mesa/create',{
                    'numero': this.numero,
                    'piso': this.piso,
                }).then(function (response) {
                    me.cerrarModal();
                    me.listarMesa(1,'','numero');
                }).catch(function (error) {
                    console.log(error);
                });
            },
            validarMesa(){
                this.errorMesa=0;
                this.errorMostrarMsjMesa =[];

                if (!this.numero) this.errorMostrarMsjMesa.push("El numero de la mesa no puede estar vacío.");
                if (!this.piso) this.errorMostrarMsjMesa.push("El piso no puede estar vacío.");
                if (this.errorMostrarMsjMesa.length) this.errorMesa = 1;

                return this.errorMesa;
            },
            actualizarMesa(){
               if (this.validarMesa()){
                    return;
                }
                
                let me = this;

                axios.put('/mesa/update',{
                    'numero': this.numero,
                    'piso': this.piso,
                    'estado': this.estado,
                    'id': this.id
                }).then(function (response) {
                    me.cerrarModal();
                    me.listarMesa(1,'','numero');
                }).catch(function (error) {
                    console.log(error);
                }); 
            },
            cerrarModal(){
                this.modal=0;
                this.tituloModal='';
                this.numero='';
                this.piso='';
                this.errorMesa=0;
            },
            abrirModal(modelo, accion, data = []){
                switch(modelo){
                    case "mesa":
                    {
                        switch(accion){
                            case 'create':
                            {
                                this.modal = 1;
                                this.tituloModal = 'Registrar Mesa';
                         		this.numero='';
                				this.piso='';
                                this.tipoAccion = 1;
                                break;
                            }
                            case 'update':
                            {
                                //console.log(data);
                                this.modal=1;
                                this.tituloModal='Actualizar Mesa';
                                this.tipoAccion=2;
                                this.id=data['id'];
                                this.numero=data['numero'];
                				this.piso=data['piso'];
                				this.estado=data['estado'];
                                break;
                            }
                        }
                    }
                }
            },
            desactivarMesa(id){
               swal({
                title: 'Esta seguro de desactivar esta mesa?',
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Aceptar!',
                cancelButtonText: 'Cancelar',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
                reverseButtons: true
                }).then((result) => {
                if (result.value) {
                    let me = this;

                    axios.put('/mesa/delete',{
                        'id': id
                    }).then(function (response) {
                        me.listarMesa(1,'','numero');
                        swal(
                        'Desactivado!',
                        'El registro ha sido desactivado con éxito.',
                        'success'
                        )
                    }).catch(function (error) {
                        console.log(error);
                    });
                    
                    
                } else if (
                    // Read more about handling dismissals
                    result.dismiss === swal.DismissReason.cancel
                ) {
                    
                }
                }) 
            },
            activarMesa(id){
               swal({
                title: 'Esta seguro de activar esta mesa?',
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Aceptar!',
                cancelButtonText: 'Cancelar',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
                reverseButtons: true
                }).then((result) => {
                if (result.value) {
                    let me = this;

                    axios.put('/mesa/active',{
                        'id': id
                    }).then(function (response) {
                        me.listarMesa(1,'','numero');
                        swal(
                        'Activado!',
                        'El registro ha sido activado con éxito.',
                        'success'
                        )
                    }).catch(function (error) {
                        console.log(error);
                    });
                    
                    
                } else if (
                    // Read more about handling dismissals
                    result.dismiss === swal.DismissReason.cancel
                ) {
                    
                }
                }) 
            },
        },
        mounted() {
            this.listarMesa(1,this.buscar,this.criterio);
        }
	}
</script>
<style>    
    .modal-content{
        width: 100% !important;
        position: absolute !important;
    }
    .mostrar{
        display: list-item !important;
        opacity: 1 !important;
        position: absolute !important;
        background-color: #3c29297a !important;
    }
    .div-error{
        display: flex;
        justify-content: center;
    }
    .text-error{
        color: red !important;
        font-weight: bold;
    }
    .danger-row{
        background-color: #fdb5b5 !important;
    }
</style>