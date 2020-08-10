<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content= "width=device-width , initial-scale=1 , shrink-to-fit=no">
 
     <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/main.css')}}"> 
  

    
    <title>@yield('title')</title>    
  </head>
    <body>
<!--  start first nav     -->
  <nav class="nav1 navbar navbar-expand-sm bg-light">
      <div class="container-fluid">
           <div class="one">
               <p >جامعة الأزهر</p>
               <img src="{{asset('img/download.jpg')}}" alt="الازهر">
           </div>
           
             <p class="b"> التحويل الرقمي </p>
             
           <div class=" two">
               <p class="i">المدينة الجامعية بنات</p>
               <p class="o">بالقاهرة</p>
           </div>
           
             <form class="example" action="/action_page.php">
                 <button   class=" btn btn-warning" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                  <input type="text" placeholder="  بحث..." name="search" >
            </form>
          
         <form  action="/action_page.php">
            
          <select name="cars">
                <option value="Arabic">العربية</option>
                <option value="English">الإنجليزية</option>
                      
                      
              </select>
         </form>
         
     </div>
</nav>



<!--end first nav-->
<!-- start second  nav-->
     <nav class="nav2 navbar navbar-expand-sm bg-light " >
        <div class="container-fluid first">
            
            <ul class="navbar-nav">
                 
                 
                
                 
               
                 
                 <li class="item1">
                         <a class="nav-link" href="/ ">
                             <i class="fa fa-home" style="font-size:24px" aria-hidden="true"> <span>الرئيسية &raquo;</span></i>
                           
                          
                         </a>
                         
                         
                         
                 </li>
                   
                 
        <li class="item1" >
          
           <div class="dropdown" (click)="clickMargine()">
                  <a class="nav-link" href="#" data-toggle="dropdown">عن المدينة &raquo;</a>
                  
                  <ul class="dropdown-menu">
                      <li class="dropdown-item"> <a  href="/shroutAltaqdim">شروط التقديم</a>    </li> 
                      <li class="dropdown-item"> <a  href="/khatawatAlelthaq">خطوات الإلتحاق</a>  </li>
                   
                      <li class="dropdown-item"> <a  href="/foroiUkhra">فروع أخرى</>      </li>
                      <li class="dropdown-item"> <a  href="/natigatAltansik">نتيجة التنسيق</a>     </li>
                      <li class="dropdown-item"> <a  href="/almabanyAlsakania">المباني السكنية</a>    </li>
                  </ul>
           </div>
        </li>
            </ul>   
                 
              <ul class="navbar-nav"> 
                <li class="item2">
                      <a class="nav-link" href="/takdimTalapAlelthak">تقديم طلب الالتحاق &raquo;</a>
                  </li>
                
               <li class="item2">
                       <a class="nav-link" href="/dafiAlmasrofat">دفع المصروفات &raquo;</a>
               </li>
               
               <li class="item2">
                       <a class="nav-link" href="/ekhterMakanek">اختر مكانك &raquo;</a>
                 </li>
               <li class="item2">
                       <a class="nav-link" href="/nategatAlqupole">نتيجة القبول &raquo;</a>
                 </li>
            </ul>
        </div>
            
     </nav>
<!--end second nav-->

 
  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->
  @if(session()->has('success'))
        <div class="container">
          <div class="alert alert-success">
              {{session()->get('success')}}
          </div>
        </div>
       @endif

  @yield('content')

  
 
 
  
 
  <div class="card footer ">
    <div class="card-body ">
        
                    <div class="row">
                        <div class="col-4">
                              <h4 >الإتصال بنا:- </h4>
                              <p>الرقم البريدي :-657655</p>
                              <p>العنوان :- مدينه نصر الحي السادس</p>
                              <p>خريطه الوصول للمدينه الجامعيه</p>
                        </div>
                        
                         <div class="col-6">
                            <h4> تابعونا على :-</h4>
                            
                                   <i class="fab fa-facebook" ></i>
                           
                            
                                   <i class="fab fa-youtube"></i>
                           
                            
                                  <i class="fab fa-whatsapp"></i>
                           
                            
                                 <i class="fab fa-twitter"></i>
                           
                           
                            
                            
                            
                         </div>
                    
                </div>
    </div>
       
             
           
    </div>
    
           
    
    
    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>  
<!-- Bootstrap 4 -->
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->

<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>

<script src="{{asset('js/student.js')}}"></script>

</body>