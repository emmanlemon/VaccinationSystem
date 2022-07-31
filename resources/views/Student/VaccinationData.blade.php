<link rel="stylesheet" href="{{ url('css/vaccination.css')}}">
@extends('Molecule.footer')
@section('footer')
@endsection

@extends('Molecule.header')
@section('content')
<body style="min-height: 100vh;"> 
   <div class="container">
      <form action="/profile/vaccination" method="POST">
          @csrf
          <span class="title">BCC Vaccination Form</span>
          <div class="form-control">
              <label for="">Vaccinated:</label>
              <select name="vaccinated">
               <option value="1">1</option>
               <option value="2">2</option>
               <option value="3">3</option>
           </select>
              @error('vaccinated')
              <div class="error">
                  <span>{{$message}}</span>
              </div>
              @enderror
          </div>
          <div class="form-control">
              <label for="">Vaccine Brand:</label>
               <select name="brand">
                     <option value="AstraZeneca">AstraZeneca</option>
                     <option value="Sinovac">Sinovac</option>
                     <option value="Pfizer">Pfizer</option> 
                     <option value="J'j">J'j</option>  
               </select>
          </div>
          <div class="form-control">
              <label for="">First Dose Date:</label>
               <input type="date" name="firstDose">
               @error('firstDose')
              <div class="error">
                  <span>{{$message}}</span>
              </div>
              @enderror
          </div>
          <div class="form-control">
              <label for="">Providers in First Dose:</label>
              <input type="text" name="provider1" placeholder="Please Input your Providers in First Dose" value="{{old('provider1')}}">
              @error('provider1')
              <div class="error">
                  <span>{{$message}}</span>
              </div>
              @enderror
          </div>
          <div class="form-control">
            <label for="">Second Dose Date:</label>
             <input type="date" name="secondDose">
             @error('secondDose')
              <div class="error">
                  <span>{{$message}}</span>
              </div>
              @enderror
        </div>
        <div class="form-control">
            <label for="">Providers in Second Dose:</label>
            <input type="text" name="provider2" placeholder="Please Input your Providers in Second Dose"" value="{{old('provider2')}}">
            @error('provider2')
            <div class="error">
                <span>{{$message}}</span>
            </div>
            @enderror
        </div>
        <div class="form-control">
         <label for="">Booster Brand:</label>
          <select name="booster">
                <option value="AstraZeneca">AstraZeneca</option>
                <option value="Sinovac">Sinovac</option>
                <option value="Pfizer">Pfizer</option> 
                <option value="J'j">J'j</option>  
          </select>
     </div>
     <div class="form-control">
      <label for="">Providers in Booster Dose:</label>
      <input type="text" name="provider3" placeholder="Please Input your Providers in Second Dose"" value="{{old('provider2')}}">
      @error('provider2')
      <div class="error">
          <span>{{$message}}</span>
      </div>
      @enderror
  </div>
      <div class="form-control">
         <label for="">Booster Date:</label>
         <input type="date" name="boosterDate">
      </div>
     <div class="form-control">
      <label for="">Reason:</label>
      <input type="text" name="reason" placeholder="Please Input your Reason" value="{{old('reason')}}">
      @error('reason')
      <div class="error">
          <span>{{$message}}</span>
      </div>
      @enderror
  </div>
          <button class="btn">Register </button>
          <button type="reset" class="btn"> Reset </button>
      </form>
  </div>
</body>
@endsection
    