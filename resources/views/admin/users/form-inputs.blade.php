@php $editing = isset($user) @endphp

<div class="box-body">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" value="{{ old('name', ($editing ? $user->name : '')) }}" class="form-control" id="name"   maxlength="255" placeholder="Name" required/>            
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control" value="{{ old('email', ($editing ? $user->email : '')) }}" maxlength="255" placeholder="Email" required/>
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="form-control" maxlength="255" placeholder="Password"
        @if(!isset($user))
        required
        @endif>
    </div>
    
    {{-- <div class="form-group col-sm-12 mt-4">
        <h4>Assign Roles</h4>
        @foreach ($roles as $role)
        <div> 
            <input type="checkbox" id="role{{ $role->id }}"  name="roles[]"  value="{{ $role->id }}" :checked="isset($user) ? $user->hasRole($role) : false" :add-hidden-value="false" />
            <label for="role{{ $role->id }}">{{ ucfirst($role->name) }}</label>
        </div>
        @endforeach
    </div> --}}
</div>
