@extends('voyager::auth.master')
    
@section('content')



    
    <div class="login-container" style="width: inherit;display: table-cell;position: relative;">
        <h2>Register</h2>

        <form method="POST" enctype="multipart/form-data" action="signup">
            {{ csrf_field() }}
            <div class="form-group form-group-default" id="emailGroup">
                <label for="name">Name:</label>
                <div class="controls">
                    <input type="text" class="form-control" id="name" name="name">
                </div>    
            </div>


            <div class="form-group form-group-default" id="emailGroup">
                <label for="email">Email:</label>
                <div class="controls">
                    <input type="email" class="form-control" id="email" name="email">
                </div>    
            </div>


            <div class="form-group form-group-default" id="passwordGroup">
                <label for="password">Password:</label>
                <div class="controls">
                    <input type="password" class="form-control" id="password" name="password">
                </div>
            </div>

            <div class="form-group form-group-default" id="passwordGroup">
                <label for="password_confirmation">Confirm Password:</label>
                <div class="controls">
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                </div>    
            </div>


            <div class="form-group form-group-default" id="role_id">
                <label for="role_id">User MemberShip</label>
                <select style="padding: 15px;width: -webkit-fill-available;" name="role_id">
                    <option value="none"  selected> select User Membership</option>
                    <option value="2" >Normal User</option>
                    <option value="3" >Silver User</option>
                    <option value="4" >Gold User</option>
                    <option value="5" >Platinium User</option>
                </select>
            </div>        

            <div class="form-group">
            
            <button type="submit" class="btn btn-block login-button">
                <span class="signin">REGISTER</span>
            </button>
            
        </div>
        </form>
    </div>

@stop


