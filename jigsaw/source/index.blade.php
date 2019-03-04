@extends('_layouts.master')

@section('body')
<body class="bg-blue-darkest text-grey-lightest antialiased">
  <div class="container mx-auto flex flex-col justify-center items-center px-6 pt-12 pb-20">
    <nav class="m-2 flex justify-center">
      <div class="logo"><img src="/assets/images/logo.svg" /></div>
    </nav>

    <div class="flex flex-col text-center max-w-lg">
      <h1 class="title p-2 m-2 text-4xl md:text-5xl lg:text-6xl">Ready to ship software that matters? 🛳️</h1>
      <p class="p-2 m-2 text-xl md:text-2xl lg:text-3xl leading-tight">
        We're a group on a mission to empower Oklahoma City's engineers, product people, designers, and makers to
        build indie software that can change the world. ⚡
      </p>
      <p class="p-2 m-2 text-xl md:text-2xl lg:text-3xl leading-tight">
        We meet once every month and would love nothing more than for you to join us. Want in?
      </p>
    </div>

    <form
      class="w-full max-w-md mt-8"
      action="https://ockindiehackers.us19.list-manage.com/subscribe/post"
      method="post"
    >
      <div class="block md:flex items-center rounded-lg shadow-none md:shadow-lg bg-tranparent md:bg-white">
        <input
          class="bg-white border-none w-full
                  rounded-lg md:rounded-none md:rounded-l-lg
                  text-grey-darkest py-4 px-4 leading-tight
                  md:shadow-none shadow-lg mb-6 md:mb-0"
          type="email"
          placeholder="ambitious-maker@slack.com"
          aria-label="Email address entry"
          name="MERGE0"
          id="MERGE0"
          autocomplete="email"
          autocapitalize="off"
          autocorrect="off"
        />

        <input type="hidden" name="u" value="894102a26253c9d17c14a7268" />
        <input type="hidden" name="id" value="e0bb22f445" />

        <button
          class="w-full md:w-auto md:flex-no-shrink
                  bg-blue hover:bg-blue-light border-blue
                  hover:border-blue-light uppercase font-bold
                  tracking-wide border-4 text-white py-4 px-4
                  rounded-lg md:rounded-none md:rounded-r-lg
                  text-base md:shadow-none shadow-lg"
          type="submit"
        >
          Stay in the Loop
        </button>
      </div>
    </form>
  </div>

  <div class="flex justify-center lg:max-w-screen-lg mx-auto px-6 pt-16 pb-6 bg-white text-grey-darkest">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/W2taXVl77D0?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>

  <!-- Announcements -->
  <div class="flex justify-center lg:max-w-screen-lg mx-auto px-6 py-6 bg-white text-grey-darkest">
    <div class="max-w-lg p-8">
      <h2 class="title pt-2 mb-12 text-center text-4xl md:text-5xl lg:text-6xl">Upcoming Events</h2>

        <div class="flex flex-col items-center my-6">
          <a href="https://www.meetup.com/ok-indiehackers/" class="bg-blue hover:bg-blue-dark text-white uppercase 
          tracking-wide font-bold py-4 px-6 rounded no-underline">See Events on Meetup</a>
        </div>

      <!-- Event Card -->
      <!-- <div class="max-w-md w-full lg:flex shadow-md">

        <div
          class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"
          style="background-image: url('https://images.unsplash.com/photo-1529119368496-2dfda6ec2804?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1650&q=80')"
          title="Woman holding a mug"
        ></div>
        <div
          class="border-r border-b border-l border-grey-light lg:border-l-0 lg:border-t lg:border-grey-light bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal"
        >
          <div class="mb-8">
            <div class="text-grey-darkest font-bold text-3xl mb-2">January Meetup: Pitch Night #1</div>
            <p class="text-md mb-2 text-grey-darkest flex items-center">
              <div class="inline-flex h-3 w-3 mr-1 text-grey">
                <img src="images/calendar.svg" />
              </div>
              Thursday, Jan. 17th at 6:30 p.m.
            </p>
            <p class="text-md mb-2 text-grey-darkest flex items-center">
              <div class="inline-flex h-3 w-3 mr-1 text-grey">
                <img src="images/location.svg" />
              </div>
              <a class="text-blue-dark no-underline" href="https://goo.gl/maps/RPSV3ioYeoq"> StarSpace46 </a>
            </p>
            <p class="text-grey-darker text-base mb-2 mt-4">
              We'll be kicking off our first round of 5-minute pitches this week. If you have a great idea for a
              software business, we want to hear it.
            </p>
            <p class="text-grey-darker text-base mb-2">
              <strong>Important:</strong> We only have space for the first 12 people. If you want in, save your spot
              by simply sending us an email stating "I'm in."
            </p>
            <p class="mb-2">
              <a href="mailto:okcindiehackers@gmail.com?subject=Save my spot for the January meetup&body=I'm in." class="font-semibold text-lg text-blue-dark hover:text-blue no-underline"
                >Save your spot →</a
              >
            </p>
          </div>
        </div>
      </div> -->
    </div>
  </div>
</body>
@endsection
