

<div  class="modal fade" id="RegistrationForm" tabindex="-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header text-center">
          <h4 class="modal-title w-100 font-weight-bold"><div class="usertopic"> </div> Registration</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
           
           </div>
           <div class="modal-body mx-3">
             <div class="row">
               <div class="col-sm-6">
                   <div class="md-form mb-5">
                       <input type="text" id='firstname' formControlName="firstnamefield" class="form-control validate" [form-control]="signupFormModalName" mdbInputDirective>
                       <label for="firstnamefield">First Name</label>
                     </div>
               </div>
               <div class="col-sm-6">
                   <div class="md-form mb-5">
                       <input type="text" id='secondname' formControlName="secondnamefield" class="form-control validate" [form-control]="signupFormModalName" mdbInputDirective>
                       <label for="secondnamefield">Second Name</label>
                     </div>
               </div>
             </div>
             
             <div class="row">
               <div class="col-sm-6">
                   <div class="md-form mb-5">
                       <input type="password" id='password' formControlName="passwordfield" class="form-control validate" [form-control]="signupFormModalName" mdbInputDirective>
                       <label for="passwordfield">Password</label>
                     </div>
               </div>
               <div class="col-sm-6">
                   <div class="md-form mb-5">
                       <input type="password" id='re-password' formControlName="re-passwordfield" class="form-control validate" [form-control]="signupFormModalName" mdbInputDirective>
                       <label for="re-passwordfield">Re-enter Password</label>
                     </div>
                 </div>
             </div>
             <div class="row">
               <div class="col-sm-12">
                   <div class="md-form mb-5">
                      <input type="email" id='email' formControlName="emailfield" class="form-control validate" [form-control]="signupFormModalName" mdbInputDirective>
                      <label for="emailfield">Email</label>
                      </div>
               </div>
             </div>
             <div class="row">
                 <div class="col-sm-12">
                     <div class="md-form mb-5">
                        <input type="text" id='address' formControlName="addressfield" class="form-control validate" [form-control]="signupFormModalName" mdbInputDirective>
                        <label for="addressfield">Address</label>
                        </div>
                 </div>
               </div>  
               <div class="row">
                   <div class="col-sm-12">
                       <div class="md-form mb-5">
                          <input type="text" id='telephoneno' formControlName="telephonenofield" class="form-control validate" [form-control]="signupFormModalName" mdbInputDirective>
                          <label for="telephonenofield">Mobile no</label>
                          </div>
                   </div>
                 </div>
                 <div class="modal-footer d-flex justify-content-center">
                     <button  class="btn btn-rounded green" mdbWavesEffect>Sign up</button>
                 </div>       
             
        </div>
      </div> 
    </div>
 </div>