import Image from "next/image";

export default function HeroSection() {
  return (
    <section
      className="relative bg-cover bg-center min-h-screen text-white"
      style={{ backgroundImage: "url('/image/hero.jpg')" }}
    >
      {/* Overlay */}
      <div className="absolute inset-0 bg-black/50 z-0"></div>

      <div className="relative max-w-screen-lg mx-auto p-4 z-10 container px-6 py-20 flex flex-col lg:flex-row items-center justify-between min-h-screen">
        {/* Left Content */}
        <div className="max-w-xl text-center lg:text-left">
          <h1 className="text-5xl font-bold mb-6 leading-tight">The Watch</h1>
          <p className="text-lg text-gray-200 mb-8">
            Holistically incentivize revolutionary collaboration and idea
            sharing before cost effective users. Actual focused services before
            highly efficient human capital.
          </p>
          <a
            href="#"
            className="inline-block bg-pink-600 hover:bg-pink-700 text-white font-bold py-3 px-6 rounded-full transition"
          >
            Back us on <span className="font-extrabold">INDIEGOGO</span>
          </a>
        </div>

        {/* Right Image */}
        <div className="relative w-[350px] lg:w-[600px] h-[450px]">
          <Image
            src="/image/laptop-hp.png"
            alt="Smart Watch"
            fill
            className="object-contain"
          />
        </div>
      </div>
    </section>
  );
}
