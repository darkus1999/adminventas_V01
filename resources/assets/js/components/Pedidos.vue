<template>
			<main class="main">
			<!-- Breadcrumb -->
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Escritorio</a></li>
            </ol>
            <div class="card">
            	<div class="card-header">
                    <i class="fa fa-align-justify"></i> Pedidos
                        <button type="button" @click="abrirModal('pedido','create')" class="btn btn-secondary">
                        <i class="icon-plus"></i>&nbsp;Nuevo
                    </button>
                </div>
                <template v-if="listado==0">
                <div class="card-body">
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <select class="form-control col-md-3" v-model="criterio">
                                      <option value="numero_mesa">Numero Mesa</option>
                                      <option value="id_pedido">Numero Pedido</option>
                                    </select>
                                    <input type="text" v-model="buscar" @keyup.enter="listarPedido(1,buscar,criterio)" class="form-control" placeholder="Texto a buscar">
                                    <button type="submit" @click="listarPedido(1,buscar,criterio)" class="btn btn-primary"><i class="fa fa-search"></i> Buscar</button>
                                </div>
                            </div>
                        </div>
                        <table class="table table-bordered table-striped table-sm">
                            <thead>
                                <tr>
                                	<th>Opciones</th>
                                    <th>Numero Pedido</th>
                                    <th>Numero Mesa</th>
                                    <th>Usuario</th>
                                    <th>Total</th>
                                    <th>Impuesto</th>
                                    <th>Estado</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="pedido in arrayPedido" :key="pedido.id" :class="[pedido.eliminado == '1' ? 'danger-row' : '']">
                                    <td>
                                        <button type="button" @click="abrirModal('pedido','update',pedido)" class="btn btn-warning btn-sm">
                                          <i class="icon-pencil"></i>
                                        </button> &nbsp;
                                        <template v-if="!pedido.eliminado">
                                            <button type="button" class="btn btn-danger btn-sm" @click="desactivarPedido(pedido.id)">
                                                <i class="icon-trash"></i>
                                            </button>
                                        </template>
                                        <template v-else>
                                            <button type="button" class="btn btn-info btn-sm" @click="activarPedido(pedido.id)">
                                                <i class="icon-check"></i>
                                            </button>
                                        </template>
                                            <button type="button" class="btn btn-info btn-sm" @click="renderCuentas(pedido.id,pedido.id_pedido)">
                                                    <i class="fa fa-book"></i>
                                            </button>
                                    </td>
                                    <td v-text="pedido.id_pedido"></td>
                                    <td v-text="pedido.numero_mesa"></td>
                                    <td v-text="pedido.usuario"></td>
                                    <td v-text="pedido.total"></td>
                                    <td v-text="pedido.impuesto"></td>
                                    <td>
                                        <div v-if="!pedido.eliminado">
                                            <span class="badge badge-success">Procesado</span>
                                        </div>
                                        <div v-else>
                                            <span class="badge badge-danger">Eliminado</span>
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
                </template>
                <template v-else-if="listado==1">
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-md-9">
                            <h5>Detalle Pedido</h5>
                        </div>
                        <div class="col-md-3">
                            <p><b>N° Pedido:</b> &nbsp;{{id_pedido}}</p>
                        </div>
                    </div>
                    <div class="form-group row border">
                            <div class="col-md-9">
                                <div class="form-group">
                                    <label for="">Cliente(*)</label>
                                    <v-select
                                        :value="dataclientebyid.nombre"
                                        :disabled="dataclientebyid.length!=0?true:false"
                                        :on-search="selectCliente"
                                        label="nombre"
                                        :options="arrayCliente"
                                        placeholder="Buscar Clientes..."
                                        :onChange="getDatosCliente"
                                    >    
                                    </v-select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="">Impuesto(*)</label>
                                <input type="text" class="form-control" v-model="impuesto">
                            </div>
                        </div>
                    <div class="form-group row border">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Cantidad</label>
                                <input :readonly="!editarCamposProducto" type="text" class="form-control" v-model="cantidad">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Descuento</label>
                                <input :readonly="!editarCamposProducto" type="text" class="form-control" v-model="descuento">
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="form-group">
                                <label>Opcion</label>
                                <button :disabled="!editarCamposProducto" @click="guardarCambiosProductoDetalle()" class="btn btn-primary form-control btnagregar"><i class="fa fa-check"></i></button>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label>Artículo <span style="color: red;">(*Seleccione Articulo)</span></label>
                                <button @click="abrirModalPedido()" class="btn btn-success form-control btnagregar"><i class="icon-plus"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row border">
                            <div class="table-responsive col-md-12">
                                <table class="table table-bordered table-striped table-sm">
                                    <thead>
                                        <tr>
                                            <th>Opciones</th>
                                            <th>Artículo</th>
                                            <th>Precio</th>
                                            <th>Cantidad</th>
                                            <th>Descuento</th>
                                            <th>Subtotal</th>
                                        </tr>
                                    </thead>
                                    <tbody v-if="arrayDetalle.length">
                                        <tr v-for="(detalle,index) in arrayDetalle" :key="detalle.id">
                                            <td>
                                                <button @click="eliminarDetalle(index)" type="button" class="btn btn-danger btn-sm">
                                                    <i class="icon-close"></i>
                                                </button>
                                                <button @click="editarProductoDetalle(index)" type="button" class="btn btn-warning btn-sm">
                                                    <i class="icon-check"></i>
                                                </button>
                                            </td>
                                            <td v-text="detalle.nombre">
                                            </td>
                                            <td v-text="detalle.precio_venta">
                                            </td>
                                            <td v-text="detalle.cantidad">
                                            </td>
                                            <td v-text="detalle.descuento">
                                            </td>
                                            <td>
                                                {{detalle.precio_venta*detalle.cantidad-detalle.descuento}}
                                            </td>
                                        </tr>
                                        <tr style="background-color: #CEECF5;">
                                            <td colspan="5" align="right"><strong>Total Parcial:</strong></td>
                                            <td>$ {{totalParcialA=(totalA-totalImpuestoA).toFixed(2)}}</td>
                                        </tr>
                                        <tr style="background-color: #CEECF5;">
                                            <td colspan="5" align="right"><strong>Total Impuesto:</strong></td>
                                            <td>$ {{totalImpuestoA=(totalA*impuesto).toFixed(2)}}</td>
                                        </tr>
                                        <tr style="background-color: #CEECF5;">
                                            <td colspan="5" align="right"><strong>Total Neto:</strong></td>
                                            <td>$ {{totalA=calcularTotal}}</td>
                                        </tr>
                                    </tbody>
                                    <tbody v-else>
                                        <tr>
                                            <td colspan="6">
                                                No hay articulos agregados
                                            </td>
                                        </tr>
                                    </tbody> 
                                </table>
                            </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <button type="button" @click="ocultarVista('detalle')" class="btn btn-secondary">Cerrar</button>
                            <button type="button" class="btn btn-primary" @click="createDetallePedido(arrayDetalle)" :disabled="dataclientebyid.length!=0?true:false">Registrar Pedido</button>
                            <button type="button" class="btn btn-warning" @click="updateDetallePedido()":disabled="dataclientebyid.length!=0?false:true">Actualizar Pedido</button>
                        </div>
                    </div>
                </div>
                </template>
                <template v-else-if="listado==2">
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-md-9">
                            <h5>Cuentas</h5>
                        </div>
                        <div class="col-md-3">
                            <p><b>N° Pedido:</b> &nbsp;{{id_pedido}}</p>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>Opciones</th>
                                    <th>Código</th>
                                    <th>N° Pedido</th>
                                    <th>Cliente</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="cuenta in arrayCuentas" :key="cuenta.id">
                                    <td>
                                        <button type="button" @click="renderDetallePedido(cuenta.id_pedido, cuenta.id)" class="btn btn-success btn-sm">
                                          <i class="icon-eye"></i>
                                        </button>
                                        <template v-if="cuenta.id_cliente!=null">
                                            <button type="button" @click="formconfirmarVenta(cuenta.id)" class="btn btn-danger btn-sm">
                                              <i class="icon-check"></i>
                                            </button>
                                        </template>
                                    </td>
                                    <td v-text="cuenta.id"></td>
                                    <td v-text="cuenta.id_pedido"></td>
                                    <td v-text="cuenta.id_cliente"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <button type="button" @click="ocultarVista('cuentas')" class="btn btn-secondary">Cerrar</button>
                        </div>
                    </div>
                </div>
                </template>
            </div>
            <!--Inicio del modal agregar/actualizar-->
            <div class="modal fade" tabindex="-1" :class="{'mostrar' : modal}" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-primary modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" v-text="tituloModal"></h4>
                            <button type="button" class="close" @click="cerrarModal('pedido')" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="text-input">Numero Pedido(*)</label>
                                    <div class="col-md-9">
                                        <input type="text" v-model="id_pedido_generado" class="form-control" placeholder="Numero de Pedido" readonly="">                                        
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="text-input">Numero Mesa</label>
                                    <div class="col-md-9">
                                        <select class="form-control" v-model="id_mesa">
                                            <option v-for="mesa in arrayMesa" :key="mesa.id" :value="mesa.numero">{{'Piso '+mesa.piso+' - Mesa '+mesa.numero}}</option>
                                        </select>                                        
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="text-input">Total(*)</label>
                                    <div class="col-md-9">
                                        <input type="text" v-model="total" class="form-control" placeholder="S/. Total" readonly="">                                        
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="text-input">Impuesto(*)</label>
                                    <div class="col-md-9">
                                        <input type="text" v-model="impuesto" class="form-control" placeholder="% Impuesto" readonly="">                                        
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="text-input">Estado</label>
                                    <div class="col-md-9">
                                        <select v-model="eliminado" class="form-control">
                                            <option value="0">Procesado</option>
                                            <option value="1">Eliminado</option>
                                        </select>                                        
                                    </div>
                                </div>
                                <div v-show="errorPedido" class="form-group row div-error">
                                    <div class="text-center text-error">
                                        <div v-for="error in errorMostrarMsjPedido" :key="error" v-text="error">

                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" @click="cerrarModal('pedido')">Cerrar</button>
                            <button type="button" v-if="tipoAccion==1" class="btn btn-primary" @click="registrarPedido()">Guardar</button>
                            <button type="button" v-if="tipoAccion==2" class="btn btn-primary" @click="actualizarPedido()">Actualizar</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!--Fin del modal-->
            <!--Inicio del modal Productos-->
            <div class="modal fade" tabindex="-1" :class="{'mostrar' : modalProductos}" role="dialog" aria-labelledby="ModalProductos" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-primary modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" v-text="tituloModal"></h4>
                            <button type="button" class="close" @click="cerrarModal('Modalproductos')" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <div class="form-group row">
                            <div class="col-md-6">
                                <div class="input-group">
                                    <select class="form-control col-md-3" v-model="criterioA">
                                      <option value="nombre">Nombre</option>
                                      <option value="descripcion">Descripción</option>
                                      <option value="codigo">Código</option>
                                    </select>
                                    <input type="text" v-model="buscarA" @keyup.enter="listarArticulo(buscarA,criterioA)" class="form-control" placeholder="Texto a buscar">
                                    <button type="submit" @click="listarArticulo(buscarA,criterioA)" class="btn btn-primary"><i class="fa fa-search"></i> Buscar</button>
                                </div>
                            </div>
                        </div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-sm">
                                 <thead>
                                 <tr>
                                    <th>Opciones</th>
                                    <th>Código</th>
                                    <th>Nombre</th>
                                    <th>Categoría</th>
                                    <th>Precio Venta</th>
                                    <th>Stock</th>
                                    <th>Estado</th>
                                    </tr>
                                   </thead>
                                   <tbody>
                                     <tr v-for="articulo in arrayArticulo" :key="articulo.id">
                                    <td>
                                        <button type="button" @click="agregarDetalleModal(articulo)" class="btn btn-success btn-sm">
                                          <i class="icon-check"></i>
                                        </button>
                                    </td>
                                    <td v-text="articulo.codigo"></td>
                                    <td v-text="articulo.nombre"></td>
                                    <td v-text="articulo.nombre_categoria"></td>
                                    <td v-text="articulo.precio_venta"></td>
                                    <td v-text="articulo.stock"></td>
                                    <td>
                                        <div v-if="articulo.condicion">
                                            <span class="badge badge-success">Activo</span>
                                        </div>
                                        <div v-else>
                                            <span class="badge badge-danger">Desactivado</span>
                                        </div>
                                        
                                    </td>
                                </tr>                                
                            </tbody>
                        </table>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" @click="cerrarModal('Modalproductos')">Cerrar</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!--Fin del modal Productos-->
        	</main>
</template>

<script>
    import vSelect from 'vue-select';
	export default {
		data (){
			return {
                id_pedido : '',
                id_mesa:'',
                numero_mesa : '',
                id_usuario: '',
                total: '',
                impuesto: 0.18,
                eliminado : '',
                id: '',
                arrayPedido : [],
                arrayMesa : [],
                id_pedido_generado: '',
                listado:0,
                modal : 0,
                tituloModal : '',
                tipoAccion : 0,
                errorPedido : 0,
                errorMostrarMsjPedido : [],
                pagination : {
                    'total' : 0,
                    'current_page' : 0,
                    'per_page' : 0,
                    'last_page' : 0,
                    'from' : 0,
                    'to' : 0,
                },
                offset : 3,
                criterio : 'numero_mesa',
                buscar : '',
                /*CUENTAS*/
                id_cuenta: null,
                arrayCuentas : [],
                /*DETALLE PEDIDO*/
                idcliente:null,
                arrayCliente : [],
                dataclientebyid : [],
                arrayDetalle : [],
                arrayDetalleEliminado : [],
                /*PRODUCTOS*/
                criterioA: 'nombre',
                buscarA:'',
                idarticulo: 0,
                codigo: '',
                nombre: '',//nombre articulo
                precio_venta: 0,
                cantidad: null,
                descuento: null,
                stock: 0,
                arrayArticulo: [],
                modalProductos: 0,
                totalParcialA: 0.0,
                totalA: 0.0,
                totalImpuestoA: 0.0,
                indexAD: null,
                editarCamposProducto: false,
			}
		},
         components: {
            vSelect
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

            },
            calcularTotal: function(){
                var resultado=0.0;
                for(var i=0;i<this.arrayDetalle.length;i++){
                    resultado=resultado+(this.arrayDetalle[i].precio_venta*this.arrayDetalle[i].cantidad-this.arrayDetalle[i].descuento)
                }
                return resultado;
            },
            idGenerado: function() {
                return this.id_pedido_generado+1;
            }
        },
        methods : {
        	 listarPedido (page,buscar,criterio){
                let me=this;
                var url= '/pedido?page=' + page + '&buscar='+ buscar + '&criterio='+ criterio;
                axios.get(url).then(function (response) {
                    var respuesta= response.data;
                    me.id_pedido_generado = respuesta.pedidos.total;
                    me.arrayPedido = respuesta.pedidos.data;
                    me.arrayMesa = respuesta.mesas;
                    me.pagination = respuesta.pagination;
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
                me.listarPedido(page,buscar,criterio);
            },
            registrarPedido(){
                if (this.validarPedido()){
                    return;
                }
                
                let me = this;

                axios.post('/pedido/create',{
                    'id_pedido': this.id_pedido_generado,
                    'id_mesa': this.id_mesa,
                    'total': this.total,
                    'impuesto': this.impuesto,
                }).then(function (response) {
                    me.cerrarModal();
                    me.listarPedido(1,'','numero_mesa');
                }).catch(function (error) {
                    console.log(error);
                });
            },
            validarPedido(){
                this.errorPedido=0;
                this.errorMostrarMsjPedido =[];

                if (!this.id_mesa) this.errorMostrarMsjPedido.push("El numero de la mesa no puede estar vacío.");
                if (this.errorMostrarMsjPedido.length) this.errorPedido = 1;

                return this.errorPedido;
            },
            actualizarPedido(){
               if (this.validarPedido()){
                    return;
                }
                
                let me = this;

                axios.put('/pedido/update',{
                    'id': this.id,
                    'id_mesa': this.id_mesa,
                }).then(function (response) {
                    me.cerrarModal();
                    me.listarPedido(1,'','numero_mesa');
                }).catch(function (error) {
                    console.log(error);
                }); 
            },
            cerrarModal(nombremodal){
                switch(nombremodal){
                    case "pedido":
                    {
                        this.modal=0;
                        this.tituloModal='';
                        this.listarPedido(1,'','numero_mesa');
                        this.numero_mesa='';
                        this.total='';
                        /*this.impuesto='';*/
                        this.errorPedido=0;
                        break;
                    }
                    case "Modalproductos":
                    {
                        this.modalProductos=0;
                        this.tituloModal='';
                        break;
                    }
                }
            },
            abrirModal(modelo, accion, data = []){
                switch(modelo){
                    case "pedido":
                    {
                        switch(accion){
                            case 'create':
                            {
                                this.modal = 1;
                                this.tituloModal = 'Registrar Pedido';
                         		this.id_pedido_generado= this.idGenerado;
                                this.id_mesa='';
                                this.total=0.00;
                                this.impuesto=this.impuesto;
                                this.tipoAccion = 1;
                                break;
                            }
                            case 'update':
                            {
                                //console.log(data);
                                this.modal=1;
                                this.tituloModal='Actualizar Pedido';
                                this.tipoAccion=2;
                                this.id=data['id'];
                                this.id_pedido_generado=data['id_pedido'];
                				this.id_mesa=data['numero_mesa'];
                				this.total=data['total'];
                                this.impuesto=data['impuesto'];
                                this.eliminado=data['eliminado'];
                                break;
                            }
                        }
                    }
                }
            },
            desactivarPedido(id){
               swal({
                title: 'Esta seguro de desactivar este Pedido?',
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

                    axios.put('/pedido/delete',{
                        'id': id
                    }).then(function (response) {
                        me.listarPedido(1,'','numero_mesa');
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
            formconfirmarVenta(id){
               swal({
                title: 'Esta seguro de finalizar este Pedido?',
                type: 'warning',
                input: 'select',
                inputOptions: {
                    BOLETA:'Boleta',
                    FACTURA:'Factura',
                    TICKET: 'Ticket'
                },
                showCancelButton: true,
                inputPlaceholder: 'Seleccione un tipo de comprobante',
                inputValidator: (value) => {
                    return new Promise((resolve) => {
                      if (value != '') {
                        console.log(value);
                        resolve()
                      } else {
                        resolve('Error en la seleccion')
                      }
                    })
                  }
                })
            },
            activarPedido(id){
               swal({
                title: 'Esta seguro de activar este Pedido?',
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

                    axios.put('/pedido/active',{
                        'id': id
                    }).then(function (response) {
                        me.listarPedido(1,'','numero_mesa');
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
            /*CUENTAS*/
            renderCuentas(pedidoId,numeroPedido){
                let me=this;
                me.listado=2;
                me.id=pedidoId;
                me.id_pedido=numeroPedido;
                me.listarCuentas(pedidoId);
            },
            listarCuentas(pedidoId){
                let me=this;
                var url= '/pedido/viewCuentas?id_pedido='+ pedidoId;
                axios.get(url).then(function (response) {
                    var respuesta= response.data;
                    me.arrayCuentas = respuesta.cuentas;
                })
                .catch(function (error) {
                    console.log(error);
                });
            },
            /*DETALLE CLIENTE*/
            renderDetallePedido(pedidoId,id_cuenta){
                this.listado=1;
                this.id_pedido=pedidoId;
                this.id_cuenta=id_cuenta;
                this.listarDetallePedido(id_cuenta);      
            },
            listarDetallePedido(id_cuenta){
                let me=this;
                var url= '/detallepedido?id_cuenta='+ id_cuenta;
                axios.get(url).then(function (response) {
                    var respuesta= response.data;
                    me.arrayDetalle = respuesta.detallepedido;
                    me.idcliente = me.arrayDetalle[0].id_usuario;
                    me.getDatosClienteId(me.idcliente);
                })
                .catch(function (error) {
                    console.log(error);
                });
            },
            createDetallePedido(array){
                let me = this;
                if (me.idcliente==null) {
                    swal({
                        type:'error',
                        title:'Error...',
                        text: 'Por favor seleccione un cliente'
                    });
                }else{
                    axios.post('/detallepedido/create',{
                    'id_cuenta': me.id_cuenta,      
                    'id_usuario':me.idcliente,  
                    'articulos': array, 
                    }).then(function (response) {
                        me.dataclientebyid=[];
                        me.updateTotalPedido(me.id, me.totalA);
                        me.updateCuentaUsuario(me.id_cuenta,me.idcliente);
                        me.renderCuentas(me.id,me.id_pedido);
                        me.listarDetallePedido(me.id_cuenta);
                    }).catch(function (error) {
                        console.log(error);
                    });
                }
            },
            updateDetallePedido(){
                    let me = this;
                    axios.put('/detallepedido/update',{ 
                    'id_cuenta': me.id_cuenta,      
                    'id_usuario':me.dataclientebyid.id,      
                    'articulos': me.arrayDetalle 
                    }).then(function (response) {
                        me.updateTotalPedido(me.id, me.totalA);
                        me.updateCuentaUsuario(me.id_cuenta,me.dataclientebyid.id);
                        me.renderCuentas(me.id,me.id_pedido);
                        me.deleteDetallePedido();
                    }).catch(function (error) {
                        console.log(error);
                    });
            },
            deleteDetallePedido(){
                    let me = this;
                    if (me.arrayDetalleEliminado != []) {
                    axios.post('/detallepedido/delete',{      
                    'articulos_eliminados': me.arrayDetalleEliminado, 
                    }).then(function (response) {
                    }).catch(function (error) {
                        console.log(error);
                    });
                    }      
            },
            updateTotalPedido(id,totalA){
                    axios.put('/pedido/updateTotal',{
                    'id': id,      
                    'total': totalA,   
                    }).then(function (response) {
                        swal({
                            type: 'success',
                            title: 'Exito!',
                            text: 'datos cargados con exito'
                        });
                    }).catch(function (error) {
                        console.log(error);
                    });
            },
            updateCuentaUsuario(id_cuenta,id_cliente){
                    axios.put('/cuenta/updateIdClienteCuenta',{
                    'id': id_cuenta,      
                    'id_cliente': id_cliente,   
                    }).then(function (response) {
                    }).catch(function (error) {
                        console.log(error);
                    });
            },
            ocultarVista(vista){
                switch(vista){
                    case 'detalle':
                    {
                    this.listado=2;
                    this.dataclientebyid=[];
                    break;
                    }
                    case 'cuentas':
                    {
                    this.listado=0;
                    this.listarPedido(this.pagination.current_page,'','numero_mesa');
                    //this.id_pedido='';
                    break; 
                    }
                }
            },
            selectCliente(search,loading){
                let me=this;
                loading(true)
                var url= '/cliente/selectCliente?filtro='+search;
                axios.get(url).then(function (response) {
                    //console.log(response);
                    let respuesta= response.data;
                    q: search
                    me.arrayCliente = respuesta.clientes;
                    loading(false)
                })
                .catch(function (error) {
                    console.log(error);
                });
            },
            getDatosCliente(val1){
                let me = this;
                me.loading = true;
                me.idcliente = val1.id;
            },
            getDatosClienteId(id){
                let me = this;
                var url= '/cliente/selectClienteId?id='+id;
                axios.get(url).then(function (response) {
                    me.dataclientebyid= response.data.cliente[0];
                    //console.log(response.data.cliente[0]);
                })
                .catch(function (error) {
                    console.log(error);
                });
            },
            /*PRODUCTOS*/
            abrirModalPedido(){
                this.modalProductos=1;
                this.tituloModal='Seleccione los articulos que desee';
            },
            encuentra(id, array){
                var sw=0;
                for(var i=0;i<array.length;i++){
                    if(array[i].id_articulo==id){
                        sw=true;
                    }
                }
                return sw;
            },
            agregarDetalleModal(data =[]){
                let me=this;
                if(me.encuentra(data['id'], me.arrayDetalle)){
                        swal({
                            type: 'error',
                            title: 'Error...',
                            text: 'Este Artículo ya se encuentra agregado!',
                        })
                    }else{
                    me.arrayDetalle.push({
                    idarticulo: data['id'],
                    nombre: data['nombre'],
                    cantidad: 1,
                    precio_venta: data['precio_venta'],
                    descuento: 0,
                    stock:data['stock']
                    });
                    }
            },
            eliminarDetalle(index){
                let me = this;
                let data = me.arrayDetalle[index];
                if (!me.encuentra(data.id_articulo,me.arrayDetalleEliminado)) {
                    me.arrayDetalleEliminado.push({data});
                }
                me.arrayDetalle.splice(index, 1);
            },
            editarProductoDetalle(index){
                let me = this;
                me.cantidad=me.arrayDetalle[index].cantidad;
                me.descuento=me.arrayDetalle[index].descuento;
                me.indexAD=index;
                me.editarCamposProducto = true;
            },
            guardarCambiosProductoDetalle(){
                let me = this;
                me.arrayDetalle[me.indexAD].cantidad=me.cantidad;
                me.arrayDetalle[me.indexAD].descuento=me.descuento;
                /*RESETEAR DATOS Y BLOQUEAR*/
                me.cantidad = null;
                me.descuento = null;
                me.indexAD = null;
                me.editarCamposProducto = false;
            },
            listarArticulo (buscar,criterio){
                let me=this;
                var url= '/articulo/listarArticuloVenta?buscar='+ buscar + '&criterio='+ criterio;
                axios.get(url).then(function (response) {
                    var respuesta= response.data;
                    me.arrayArticulo = respuesta.articulos.data;
                })
                .catch(function (error) {
                    console.log(error);
                });
            },
        },
        mounted() {
            this.listarPedido(1,this.buscar,this.criterio);
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