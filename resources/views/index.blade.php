@extends('app')

@role('writer')
I'm a writer!
@else
    I'm not a writer...
    @endrole

    @hasrole('writer')
    I'm a writer!
    @else
        I'm not a writer...
        @endhasrole

        @hasanyrole(\Spatie\Permission\Models\Role::all())
        I have one or more of these roles!
        @else
            I have none of these roles...
        @endhasanyrole

            @hasallroles(\Spatie\Permission\Models\Role::all())
            I have all of these roles!
            @else
                I don't have all of these roles...
                @endhasallroles

                @can('Edit Post')
                    I have permission to edit
                @endcan

