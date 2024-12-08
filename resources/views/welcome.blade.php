<x-layout>
    <div class="space-y-10">

        <section class="text-center pt-6">
            <h1 class="text-4xl font-bold">Let's Find Your Next Job</h1>

            <form action="" class="mt-6">
                <input type="text" placeholder="Web Developer..." class="w-full max-w-xl px-5 py-4 rounded-xl bg-white/25 border-white/10">
            </form>
        </section>
        <section>
            <x-section-heading>Featured Jobs</x-section-heading>

            <div class="grid gap-8 mt-6 lg:grid-cols-3">
                 <x-job-card></x-job-card>
                 <x-job-card></x-job-card>
                 <x-job-card></x-job-card>
            </div>
          </section>
          <section>
              <x-section-heading>Tag</x-section-heading>

              <div class="mt-6 space-x-3">
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
                <x-tag>Tag</x-tag>
          </div>
          </section>
          <section>
              <x-section-heading>Recents Jobs</x-section-heading>

              <div class="mt-6 space-y-6">
                    <x-job-card-wide></x-job-card-wide>
                    <x-job-card-wide></x-job-card-wide>
                    <x-job-card-wide></x-job-card-wide>
              </div>
          </section>

    </div>
</x-layout>
