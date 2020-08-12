@section('ponente')
<!-- Modal Ponente -->
  <div class="modal fade" id="ponenteModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-content">
        <div class="modal-body">
          <div class="container-fluid">
          <div class="row">
              <div class="col-md-5">
                  <div class="space-20"> </div>
                  <img :src="ponente.imagen" alt="CEO 2020" class="img-responsive" width="100%" />
                  <h2 class="text-center titulo-nombre"></h2>
                  <div class="ponente-social text-center">
                      <a v-if="ponente.facebook != ''" target="_blank" :href="ponente.facebook"><i class="ion-social-facebook"></i></a>
                      <a v-if="ponente.twitter != ''" target="_blank" :href="ponente.twitter"><i class="ion-social-twitter"></i></a>
                      <a v-if="ponente.linkedin != ''" target="_blank" :href="ponente.linkedin"><i class="ion-social-linkedin"></i></a>
                      <a v-if="ponente.instagram != ''" target="_blank" :href="ponente.instagram"><i class="ion-social-instagram"></i></a>
                  </div>
              </div>
              <div class="col-md-7">
                  <h2 class="titulo-ponente-modal">x</h2>
                  <div class="semblanza-contener" v-html="ponente.semblanza"></div>
              </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Modal Ponente -->

  @foreach($ponentes as $ponente)
  <div class="row">
    <div class="col-md-4 col-sm-6 col-xs-6 space-bottom-10 space-bottom-ponentes">
        <div class="ponente_item">
            <img src="item.imagen" alt="CEO 2020" class="img-responsive" width="100%" />
            <div class="ponente_item_hover">
                <div class="ponente-border clearfix">
                    <div class="item_info">
                        <span>{{$ponente->nombre_evento}}</span>
                        <em class="cargo-ponente">{{$ponente->cargo}}</em>
                        <div class="ponente-social">
                            <a v-if="item.facebook != ''" target="_blank" :href="item.facebook"><i class="ion-social-facebook"></i></a>
                            <a v-if="item.twitter != ''" target="_blank" :href="item.twitter"><i class="ion-social-twitter"></i></a>
                            <a v-if="item.linkedin != ''" target="_blank" :href="item.linkedin"><i class="ion-social-linkedin"></i></a>
                            <a v-if="item.instagram != ''" target="_blank" :href="item.instagram"><i class="ion-social-instagram"></i></a>
                        </div>
                        <em class="ver-ponente" @click="showModals(item)">ver <i class="ion-ios-arrow-right"></i></em>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
  @endforeach

  <div class="row">
    <div class="col-md-4 col-md-offset-8">
        <div class="text-right coolButton">
        <div class="background-btn"></div>
             <a href="/ponentes">
                <div>Ver más</div>
             </a>
        </div>
    </div>
  </div>
 
  <div class="space-30"></div>
  @endsection