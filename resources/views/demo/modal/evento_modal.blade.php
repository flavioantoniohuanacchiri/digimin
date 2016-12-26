<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="modal_evento">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Evento</h4>
      </div>
      <div class="modal-body">
          <div id="exTab1" class=""> 
            <ul  class="nav nav-pills">
                  <li class="active">
                    <a  href="#1a" data-toggle="tab">Datos Genericos</a>
                  </li>
                  <li><a href="#2a" data-toggle="tab">Organizacion</a>
                  </li>
                  <li><a href="#3a" data-toggle="tab">Lugares / Acciones</a>
                  </li>
                  <li><a href="#4a" data-toggle="tab">Personas</a>
                  </li>
                </ul>
                <hr>
                  <div class="tab-content clearfix">
                    <div class="tab-pane active" id="1a">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="col-md-4">
                            <label>T. Documento</label>
                            <select class="form-control" required="required">
                                <option value="">Elije una Opcion</option>
                                <option value="1">DNI</option>
                                <option value="2">Pasaporte</option>
                            </select>
                          </div>
                          <div class="col-md-4">
                            <label>N° Documento</label>
                            <input type="text" name="" class="form-control" placeholder="00000000000">
                          </div>
                          <div class="col-md-4">
                            <label>Fecha</label>
                            <input type="text" name="" id="fecha" class="form-control">
                          </div>
                        </div>
                        
                      </div>
                      <hr>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="col-md-3">
                            <label>Dependencia 1</label>
                            <select class="form-control selectpicker" required="required" data-live-search="true">
                                <option value="">Elije una Opcion</option>
                                <option value="1">AGRICULTURA</option>
                                <option value="2">AMBIENTE</option>
                                <option value="3">COMERCIO EXTERIOR Y TURISMO</option>
                            </select>
                          </div>
                          <div class="col-md-3">
                            <label>Dependencia 2</label>
                            <select class="form-control selectpicker" required="required" data-live-search="true">
                                <option value="">Elije una Opcion</option>
                                <option value="1">AGRICULTURA</option>
                                <option value="2">AMBIENTE</option>
                                <option value="3">COMERCIO EXTERIOR Y TURISMO</option>
                            </select>
                          </div>
                          <div class="col-md-3">
                            <label>Dependencia 3</label>
                            <select class="form-control selectpicker" required="required" data-live-search="true">
                                <option value="">Elije una Opcion</option>
                                <option value="1">AGRICULTURA</option>
                                <option value="2">AMBIENTE</option>
                                <option value="3">COMERCIO EXTERIOR Y TURISMO</option>
                            </select>
                          </div>
                          <div class="col-md-3">
                            <label>Dependencia 4</label>
                            <select class="form-control selectpicker" required="required" data-live-search="true">
                                <option value="">Elije una Opcion</option>
                                <option value="1">AGRICULTURA</option>
                                <option value="2">AMBIENTE</option>
                                <option value="3">COMERCIO EXTERIOR Y TURISMO</option>
                            </select>
                          </div>
                        </div>
                      </div>
                        <hr>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="col-md-6">
                            <label>Tipificacion</label>
                            <select class="form-control selectpicker" required="required" data-live-search="true">
                                <option value="">Elije una Opcion</option>
                                <option value="1">AGRICULTURA</option>
                                <option value="2">AMBIENTE</option>
                                <option value="3">COMERCIO EXTERIOR Y TURISMO</option>
                            </select>
                          </div>
                          <div class="col-md-6">
                            <label>Resumen / Diario</label>
                            <select class="form-control selectpicker" required="required" data-live-search="true">
                                <option value="">Elije una Opcion</option>
                                <option value="1">AGRICULTURA</option>
                                <option value="2">AMBIENTE</option>
                                <option value="3">COMERCIO EXTERIOR Y TURISMO</option>
                            </select>
                          </div>
                        </div>
                      </div>
                                            <hr>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="col-md-4">
                            <label>Factor</label>
                            <select class="form-control selectpicker" required="required" data-live-search="true">
                                <option value="">Elije una Opcion</option>
                                <option value="1">AGRICULTURA</option>
                                <option value="2">AMBIENTE</option>
                                <option value="3">COMERCIO EXTERIOR Y TURISMO</option>
                            </select>
                          </div>
                          <div class="col-md-4">
                            <label>Sub Factor 1</label>
                            <select class="form-control selectpicker" required="required" data-live-search="true">
                                <option value="">Elije una Opcion</option>
                                <option value="1">AGRICULTURA</option>
                                <option value="2">AMBIENTE</option>
                                <option value="3">COMERCIO EXTERIOR Y TURISMO</option>
                            </select>
                          </div>
                          <div class="col-md-4">
                            <label>Sub Factor 2</label>
                            <select class="form-control selectpicker" required="required" data-live-search="true">
                                <option value="">Elije una Opcion</option>
                                <option value="1">AGRICULTURA</option>
                                <option value="2">AMBIENTE</option>
                                <option value="3">COMERCIO EXTERIOR Y TURISMO</option>
                            </select>
                          </div>
                        </div>
                      </div>

                      <hr>
                      <div class="row">
                        <div class="col-md-12">
                          <label>Asunto</label>
                          <textarea class="form-control"></textarea>
                        </div>
                      </div>
                    </div>


                    <div class="tab-pane" id="2a">
                      <h3>We use the class nav-pills instead of nav-tabs which automatically creates a background color for the tab</h3>
                    </div>
                    <div class="tab-pane" id="3a">
                      <h3>We applied clearfix to the tab-content to rid of the gap between the tab and the content</h3>
                    </div>
                      <div class="tab-pane" id="4a">
                      <h3>We use css to change the background color of the content to be equal to the tab</h3>
                    </div>
                  </div>
              </div>

            <hr></hr>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
