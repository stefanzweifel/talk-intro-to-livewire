@extends('layouts.app')

@section('content')

    <div>
        <h1 class="font-bold text-xl mb-4">Examples</h1>

        <ul class="space-y-2 underline list-disc pl-4">
            <li>
                <a href="{{ route('examples.counter') }}">Counter</a>
            </li>
            <li>
                <a href="{{ route('examples.showHide') }}">Show/Hide</a>
            </li>
            <li>
                <a href="{{ route('examples.dataBinding') }}">Data Binding</a>
            </li>
            <li>
                <a href="{{ route('examples.dataBindingModifier') }}">Data Binding Modifiers</a>
            </li>
            <li>
                <a href="{{ route('examples.modelBinding') }}">Model Binding</a>
            </li>
        </ul>
    </div>


@endsection
