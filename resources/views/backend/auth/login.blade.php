@extends('backend.auth.master')
@section('title', 'Trang login')
@section('content')
@if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
                    <form method="POST" action="{{ url('/auth/login') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
                        <fieldset>
                            <div class="form-group">
                                Email
                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                            </div>

                            <div class="form-group">
                                Mật khẩu
                                <input type="password" class="form-control" name="password" id="password">
                            </div>

                            <div>
                                <input type="checkbox" name="remember">Nhớ tài khoản
                            </div>

                            <div>
                                <button type="submit" class="btn btn-lg btn-success btn-block">Đăng nhập</button>
                            </div>
                        </fieldset>
                    </form>

                            <div>
                                <a class="btn btn-lg btn-default btn-block btnTaoTaiKhoan" href="{{ url('auth/register') }}">Tạo tài khoản mới</a>
                            </div>
                            
 @endsection