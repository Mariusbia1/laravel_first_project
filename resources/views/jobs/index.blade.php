<x-layout>
    <div class="space-y-10">

        <section class="pt-6 text-center">
            <h1 class="text-4xl font-bold">Let's Find Your Next Job</h1>

            <form action="" class="mt-6">
                <input type="text" placeholder="Web Developer..." class="w-full max-w-xl px-5 py-4 rounded-xl bg-white/5 border-white/10">
            </form>
        </section>
        <section>
            <x-section-heading>Featured Jobs</x-section-heading>

            <div class="grid gap-8 mt-6 lg:grid-cols-3">
                @foreach ($featureJobs as $job)
                     <x-job-card :$job></x-job-card-wide>
                @endforeach
            </div>
          </section>
          <section>
              <x-section-heading>Tag</x-section-heading>

              <div class="mt-6 space-x-1">
                @foreach ($tags as $tag)
                     <x-tag :tag="$tag">Tag</x-tag>
                @endforeach

          </div>
          </section>
          <section>
              <x-section-heading>Recents Jobs</x-section-heading>

              <div class="mt-6 space-y-6">
                    @foreach ($jobs as $job)
                         <x-job-card-wide :$job></x-job-card-wide>
                    @endforeach
                </div>
          </section>

    </div>
</x-layout>
