@extends('layouts.app')

@section('content')

    <div class="m-auto w-4/5 py-24">
        <div>

        </div>

        <div class="w-5/6 py-10">
            @foreach ($pessoas as $pessoa)
            <div class="m-auto">
                <div class="float-right">
                    <a class="border-b-2 pb-2 border-dotted italic text-green-500" href="pessoa/{{ $pessoa->id }}/edit">
                        Edit &rarr;
                    </a>
                    <form action="/pessoa/{{ $pessoa->id }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="border-b-2 pb-2 border-dotted italic text-red-500">
                            Delete &rarr;
                        </button>
                    </form>

                </div>
                <span>

                </span>
                <h2>

                </h2>
                <h3>

                </h3>
                <h4>

                </h4>
                <h5>

                </h5>
                <h6>

                </h6>
                <p>

                </p>

            </div>
            @endforeach
        </div>
    </div>

@endsection
