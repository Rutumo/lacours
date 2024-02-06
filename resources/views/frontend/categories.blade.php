
    <div class="col-lg-6 align-self-center">
        <div class="row">
            <div class="col-lg-12">
                <form id="contact" action="" method="post">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2>Catégories de recherche</h2>
                        </div>
                        @if(Session::get('success'))
                            <div class="alert alert-success">
                                {{Session::get('success')}}
                            </div>
                        @endif

                        @if(Session::get('fail'))
                            <div class="alert alert-danger">
                                {{Session::get('fail')}}
                            </div>
                        @endif

                        <form action="add" method="post">
                        @csrf
                            <div class="col-lg-8">
                                <fieldset>
                                    <input name="categorie" type="text" id="name" placeholder="CATEGORIE DU MOT CLE POUR LA RECHERCHE">
                                    <span style="color:red">@error('categorie'){{$message}} @enderror</span>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <textarea name="description" type="text" class="form-control" id="message" placeholder="DESCRIPTION DU MOT CLE" ></textarea>
                                    <span style="color:red">@error('description'){{$message}} @enderror</span>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="button">INSERT</button>
                                </fieldset>
                            </div>
                        </form>
                    </div>
                </form>
            </div>
        </div>
    </div>
