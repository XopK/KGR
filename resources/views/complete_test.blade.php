<x-profile>
    <div class="col-md-8">
        <div class="container">
            <h2 class="mb-4">Пройденные тесты</h2>
            <div class="row">
                @forelse(Auth::user()->complete_tests as $test)
                    <div class="col-md-12 mb-3">
                        <div class="card p-3">
                            <h5 class="card-title">{{ $test->test->name ?? 'Название курса отсутствует' }}</h5>
                            <p class="card-text">
                                @if ($test->test->course)
                                    Курс:
                                    <a href="{{ route('lessons', $test->test->course->id) }}">
                                        {{ $test->test->course->title ?? 'Название курса отсутствует' }}
                                    </a>
                                @else
                                    Курс отсутствует
                                @endif
                            </p>

                            <p class="card-text">
                                Результат: {{ $test->correct }} из {{ $test->correct + $test->incorrect }} правильных
                            </p>

                            <p class="card-text small text-muted">
                                Дата прохождения: {{ $test->created_at->format('d.m.Y H:i') }}
                            </p>
                        </div>
                    </div>
                @empty
                    <div class="col-md-12">
                        <div class="alert alert-warning" role="alert">
                            Вы ещё не прошли ни одного теста.
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</x-profile>

