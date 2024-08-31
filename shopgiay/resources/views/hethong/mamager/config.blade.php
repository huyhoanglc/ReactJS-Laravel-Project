@extends("hethong/layout")
@section("noidung")
<div class="container">
            <div class="page-title">
              <h3>Cấu hình website</h3>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-header">Thông tin website</div>
                  <div class="card-body">
                    <h5 class="card-title"></h5>
                    <form method="post" enctype="multipart/form-data">
                      @csrf
                      <input type="hidden" name="id" value="{{isset($load)?$load->id:null}}" >
                      <div class="mb-3 row">
                        <label class="col-sm-2">Tiêu Đề</label>
                        <div class="col-sm-10">
                          <input type="text" name="tieude" class="form-control" value="{{old('tieude',isset($load)?$load->tieude:null)}}" placeholder="Nhập tiêu đề website" />
                          {!!$errors->first('tieude','<div class="text-danger">:message</div>')!!}
                        </div>
                      </div>
                      <div class="line"></div>
                      <br />
                      <div class="mb-3 row">
                        <label class="col-sm-2">Từ khóa</label>
                        <div class="col-sm-10">
                          <input type="text" name="tukhoa" class="form-control"  value="{{old('tukhoa',isset($load)?$load->tukhoa:null)}}" placeholder="Nhập từ khóa website" />
                          {!!$errors->first('tukhoa','<div class="text-danger">:message</div>')!!}
                        </div>
                      </div>
                      <div class="line"></div>
                      <br />
                      <div class="mb-3 row">
                        <label class="col-sm-2">Mô tả</label>
                        <div class="col-sm-10">
                            <input type="text" name="mota" class="form-control"  value="{{old('mota',isset($load)?$load->mota:null)}}" placeholder="Nhập mô tả website" />
                            {!!$errors->first('mota','<div class="text-danger">:message</div>')!!}
                        </div>
                      </div>
                      <div class="line"></div>
                      <br />
                      <div class="mb-3 row">
                        <label class="col-sm-2">Tên miền</label>
                        <div class="col-sm-10">
                            <input type="text" name="tenmien" class="form-control"  value="{{old('tenmien',isset($load)?$load->tenmien:null)}}" placeholder="Nhập tên miền website" />
                            {!!$errors->first('tenmien','<div class="text-danger">:message</div>')!!}
                        </div>
                      </div>
                      <div class="line"></div>
                      <br />
                      <div class="mb-3 row">
                        <label class="col-sm-2">Mô tả Bảo trì</label>
                        <div class="col-sm-10">
                            <input type="text" name="motabaotri" class="form-control"  value="{{old('motabaotri',isset($load)?$load->motabaotri:null)}}" placeholder="Nhập mô tả bảo trì website" />
                            {!!$errors->first('motabaotri','<div class="text-danger">:message</div>')!!}
                        </div>
                      </div>
                      
                      <div class="line"></div>
                      <br />
                      <div class="mb-3 row">
                        <label class="col-sm-2">Email</label>
                        <div class="col-sm-10">
                            <input type="text" name="email" class="form-control"  value="{{old('email',isset($load)?$load->email:null)}}" placeholder="Nhập email website" />
                            {!!$errors->first('email','<div class="text-danger">:message</div>')!!}
                        </div>
                      </div>

                      <div class="line"></div>
                      <br />
                      <div class="mb-3 row">
                        <label class="col-sm-2">Server Email</label>
                        <div class="col-sm-10">
                            <input type="text" name="host_mail" class="form-control"  value="{{old('host_mail',isset($load)?$load->host_mail:null)}}" placeholder="Nhập server email" />
                            {!!$errors->first('host_mail','<div class="text-danger">:message</div>')!!}
                        </div>
                      </div>

                      <div class="line"></div>
                      <br />
                      <div class="mb-3 row">
                        <label class="col-sm-2">Pass Email</label>
                        <div class="col-sm-10">
                            <input type="text" name="pass_mail" class="form-control"  value="{{old('pass_mail',isset($load)?$load->pass_mail:null)}}"  placeholder="Nhập password email" />
                            {!!$errors->first('pass_mail','<div class="text-danger">:message</div>')!!}
                        </div>
                      </div>
                      <div class="line"></div>
                      <br />
                      <div class="mb-3 row">
                        <label class="col-sm-2">Youtube</label>
                        <div class="col-sm-10">
                            <input type="text" name="youtube" class="form-control"  value="{{old('youtube',isset($load)?$load->youtube:null)}}" placeholder="Nhập kênh youtube website" />
                            {!!$errors->first('youtube','<div class="text-danger">:message</div>')!!}
                        </div>
                      </div>

                      <div class="line"></div>
                      <br />
                      <div class="mb-3 row">
                        <label class="col-sm-2">Facebook</label>
                        <div class="col-sm-10">
                            <input type="text" name="facebook" class="form-control"  value="{{old('facebook',isset($load)?$load->facebook:null)}}"  placeholder="Nhập facebook website" />
                            {!!$errors->first('facebook','<div class="text-danger">:message</div>')!!}
                        </div>
                      </div>

                      <div class="line"></div>
                      <br />
                      <div class="mb-3 row">
                        <label class="col-sm-2">Icon</label>
                        <div class="col-sm-10">
                            <input type="file" name="icon" class="form-control" />
                            {!!$errors->first('icon','<div class="text-danger">:message</div>')!!}
                        </div>
                      </div>

                      <div class="line"></div>
                      <br />
                      <div class="mb-3 row">
                        <div class="col-sm-6 offset-sm-2">
                          <button type="submit" class="btn btn-primary mb-2">
                            <i class="fas fa-save"></i> Save
                          </button>
                          <a href="{{route('s.baotri')}}" class="btn btn-danger mb-2"><i class="fas fa-wrench"></i> Bảo trì Website</a>
                          <a href="{{route('s.tatbaotri')}}" class="btn btn-danger mb-2"><i class="fas fa-power-off"></i> Tắt Bảo trì web</a>
                          <a href="{{route('s.xoacache')}}" class="btn btn-danger mb-2"><i class="fas fa-power-off"></i> Xóa cache</a>
                          <a href="{{route('s.quantri')}}" class="btn btn-danger mb-2"><i class="fas fa-times"></i> Cancel</a>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection