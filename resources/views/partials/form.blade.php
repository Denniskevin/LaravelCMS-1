{!! Form::hidden('user_id',1) !!}
{!! Form::text('title',null,['placeholder'=>'Post Title']) !!}
{!! Form::textarea('body') !!}
{!! Form::text('author',null,['placeholder'=>'Author','class'=>'post-author']) !!}
{!! Form::submit() !!}
