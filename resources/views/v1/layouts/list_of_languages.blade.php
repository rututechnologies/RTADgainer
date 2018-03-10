{{is_array($languages)}}
   @if(count($languages))
    <form method="post" role="form" id="language_Select">
            <div class="form-group">
                {{csrf_field()}}
                    <label>Select Language</label><br>
                    {!! Form::select('select_language',$languages,null,
                    ['id'=>'select_language','class'=>'form-control',
                    'placeholder'=>"Select Language",
                    'onchange'=>'changeLanguage(this.value)']
                    )!!}
            </div>
   @endif