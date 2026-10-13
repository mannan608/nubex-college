  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      @foreach ($qualifications as $qualification)
          @include('frontend.pages.industry.qualificationCard', ['qualification' => $qualification])
      @endforeach
  </div>
