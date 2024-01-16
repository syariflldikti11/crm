<div class="auth-box p-4 bg-white rounded">
          <div id="loginform">
            <div class="logo">
            <center>   <img width="100%" src="<?= base_url(); ?>/assets/backend/assets/images/logoesakip.png"><br /><br />
            
              Sistem Akuntabilitas Kinerja Instansi Pemerintah
              </center>
            </div>
            <!-- Form -->
            <div class="row">
              <div class="col-12">
              
                <?php
                     echo form_open('login/auth','class="form-horizontal mt-3 form-material"'); ?>
                  <div class="form-group mb-3">
                    <div class="">
                      <input
                        class="form-control"
                        type="text"
                        required=""
                        placeholder="Username"
                        name="username"
                      />
                    </div>
                  </div>
                  <div class="form-group mb-4">
                    <div class="">
                      <input
                        class="form-control"
                        type="password"
                        required=""
                        name="password"
                        placeholder="Password"
                      />
                    </div>
                  </div>

                 
                  <div class="form-group text-center mt-4 mb-3">
                    <div class="col-xs-12">
                      <input 
                        class="
                          btn btn-info
                          d-block
                          w-100
                          waves-effect waves-light
                        "
                        type="submit" value="Log In"
                      >
                        
                    </div>
                  </div>
              
              
                </form>
              </div>
            </div>
          </div>
  
        </div>

      