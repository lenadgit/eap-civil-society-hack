{{--USAGE--}}
{{--@include('form.group', ['type' => 'select', 'key' => 'country_id', 'label' => 'salam', 'selects' => $countries, 'options' => ['class' => 'form-control', 'required']])--}}
{{--@include('form.group', ['key' => 'name', 'label' => 'Name', 'options' => ['value' => old('name') ?: $user->name]])--}}

<?php
$type = (isset($type) ? $type : 'text');
switch ($type)
{
    case 'text':
        $field = Form::text($key, ! array_key_exists('notOld', $options) ? (old($key) ? : \Request::has($key) ? \Request::get($key) : (isset($item->{$key}) ? $item->{$key} : (array_key_exists('value', $options) ? $options['value'] : null))) : null, array_merge(["id" => $key], $options));
        break;
    case 'email':
        $field = Form::email($key, ! array_key_exists('notOld', $options) ? (old($key) ? : \Request::has($key) ? \Request::get($key) : (isset($item->{$key}) ? $item->{$key} : (array_key_exists('value', $options) ? $options['value'] : null))) : null, array_merge(["id" => $key], $options));
        break;
    case 'phone':
        $field = Form::text($key, ! array_key_exists('notOld', $options) ? (old($key) ? : \Request::has($key) ? \Request::get($key) : (isset($item->{$key}) ? $item->{$key} : (array_key_exists('value', $options) ? $options['value'] : null))) : null, array_merge(["id" => $key, "data-inputmask" => "'mask': '999-999-99-99'", "placeholder" => "050-500-00-00"], $options));
        break;
    case 'textarea':
        $field = Form::textarea($key, ! array_key_exists('notOld', $options) ? (old($key) ? : \Request::has($key) ? \Request::get($key) : (isset($item->{$key}) ? $item->{$key} : (array_key_exists('value', $options) ? $options['value'] : null))) : null, array_merge(["id" => $key], $options));
        break;
    case 'password':
        $field = Form::password($key, $options);
        break;
    case 'select':
        if (is_object($selects) and ! $selects->count()) {
            $selects = [0 => trans('front.not')];
        } else {
            if (isset($options['empty']))
            {
                $selects = [0 => trans('front.not_choose')] + $selects;
            }
        }

        $value = ! array_key_exists('notOld', $options) ? (old($key) ? : \Request::has($key) ? \Request::get($key) : (isset($item) ? (array_key_exists('relation', $options) ? $item->{$key}->{$options['relation']} : (isset($item->{$key}) ? $item->{$key} : null)) : null)) : null;

        $options['data-hiddenvalue'] = $value;

        $field = Form::select($key, $selects, $value, $options);
        break;

    case 'multi-select':
        $field = '<select class="select2_multiple ' . (isset($options['class']) ? $options['class'] : '') . '" name="' . $key . '[]" multiple="multiple">';

        foreach ($selects as $id => $select) :
            $mainCategories = old($key) ? : (isset($item) ? $item->{$key}->pluck('id')->all() : null);
            $selected = ($mainCategories AND in_array($id, $mainCategories)) ? 'selected' : '';
            $field .= '<option ' . $selected . ' value="' . $id . '">' . $select . '</option>';
        endforeach;

        $field .= '</select>';
        break;

    case 'radio':
        $field = '<br/>';

        foreach ($values as $value => $title):
            $field .= '&nbsp' . $title . '&nbsp:&nbsp' . Form::radio($key, $value, (old($key) AND old($key) == $value) ? true : (isset($item->{$key}) and $item->{$key} == $value ? true : false), [
                    'class' => 'flast',
                    'id'    => $key . '_' . $value
                ]);
        endforeach;

        break;

    case 'checkbox':
        $field = '<br/>';
        $field .= Form::checkbox($key, $value, (old($key) AND old($key) == $value) ? true : (isset($item->{$key}) and $item->{$key} == $value ? true : false), [
                'class' => 'flatd',
                'id'    => $key
            ]) . '&nbsp&nbsp' . $title;
        break;

    case 'date-picker':
        $field = '<div id="reportrange_right" class="pull-left" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                          <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                          <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                        </div>';
        break;
    case 'date':
        $field = Form::text($key, ! array_key_exists('notOld', $options) ? (old($key) ? : \Request::has($key) ? \Request::get($key) : (isset($item->{$key}) ? $item->{$key} : (array_key_exists('value', $options) ? $options['value'] : null))) : null, array_merge(["id" => $key, "data-inputmask" => "'mask': '99/99/9999'", "placeholder" => \Carbon\Carbon::now()->format('d/m/Y')], $options));
        break;

    case 'numeric':
        $field = '
                <button data-type="-" class="btn btn-round btn-warning btn-sm"><i class="fa fa-minus"></i></button>';
        $field .= Form::text($key, ! array_key_exists('notOld', $options) ? (old($key) ? : (isset($item->{$key}) ? $item->{$key} : (array_key_exists('value', $options) ? $options['value'] : null))) : null, array_merge(["id" => $key], $options));
        $field .= '
                <button data-type="+" class="btn btn-round btn-success btn-sm"><i class="fa fa-plus"></i></button>
                <a style="position: relative;left: 10px;top: 5px;" data-toggle="tooltip" data-placement="top" title="' . $label . '">
                    <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
                </a>
';
        break;
}
?>
<?php $errorKey = str_replace(']', '', str_replace('[', '.', $key));?>
<div class="form-group {{ $errors->has($errorKey) ? ' has-error' : '' }} ">
    @if(isset($label))
        {!! Form::label($key, $label) !!}
    @endif
    {!! $field !!}
    @if ($errors->has($errorKey))
        <span class="help-block">
            <strong>{!! $errors->first($errorKey) !!}</strong>
        </span>
    @endif
</div>



@push('footer-scripts')
    <script src="{{ asset('libraries/mask/jquery.inputmask.js') }}"></script>
    <script src="{{ asset('libraries/mask/bindings/inputmask.binding.js') }}"></script>


    <script>
        $(document).ready(function(){
            $("[data-inputmask]").inputmask();
        });
    </script>
@endpush