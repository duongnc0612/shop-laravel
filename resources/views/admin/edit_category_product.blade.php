@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Cập nhật danh mục sản phẩm
                        </header>
                        
                        <div class="panel-body">
                            <div class="position-center">
                                @foreach($edit_category_product as $key => $edit_value )
                                <form role="form" action="{{ URL::to('/update-category-product/'.$edit_value->category_id) }}" method="post">
                                {{ csrf_field()  }}
                                <?php 
                                $message = Session::get('message');
                                if ($message) {
                                    echo "
                                    <div class=\"alert alert-danger\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
                                        <strong>
                                    ";
                                    echo $message;
                                    echo "
                                    </strong>
                                    </div>
                                    ";
                                    Session::put('message',null);
                                }
                                ?>

                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên danh mục</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục" name="category_product_name" value="{{$edit_value->category_name}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả danh mục</label>
                                    <textarea style="resize: none;" rows="7" class="form-control" id="exampleInputPassword1" name="category_product_desc"  >{{$edit_value->category_name}}
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Hiển thị</label>
                                    <select name="category_product_status" class="form-control input-sm m-bot15">
                                         <option value="0" 
                                                <?php  
                                                if ($edit_value->category_status == 0) {
                                                    echo " selected ";
                                                }
                                                ?>
                                        >Ẩn</option>
                                         <option value="1"
                                                <?php  
                                                if ($edit_value->category_status == 1) {
                                                    echo " selected ";
                                                }
                                                ?>
                                         >Hiển thị</option>
                                       
                                        
                                        
                                    </select>
                                </div>
                                
                                
                                <button type="submit" name="add_category_product" class="btn btn-info">Cập nhật danh mục</button>
                            </form>
                            @endforeach
                            </div>

                        </div>
                    </section>

            </div>
            
        </div>
@endsection