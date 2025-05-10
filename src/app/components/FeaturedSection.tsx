export default function FeaturedSection() {
  return (
    <section className="relative z-30 -mt-20">
      <div className="sticky top-8 z-40 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 bg-[#F5F7FA] rounded-xl p-6 shadow-xl">
          <div
            data-aos="fade-right"
            className="bg-white p-5 rounded-lg shadow-md"
          >
            <h3 className="font-semibold text-[#0A2540] mb-2">Desain UI/UX</h3>
            <p className="text-sm text-gray-600">
              Antarmuka intuitif & menarik.
            </p>
          </div>
          <div
            data-aos="fade-left"
            className="bg-white p-5 rounded-lg shadow-md"
          >
            <h3 className="font-semibold text-[#0A2540] mb-2">
              Sistem Digital
            </h3>
            <p className="text-sm text-gray-600">
              Solusi web & mobile scalable.
            </p>
          </div>
          <div
            data-aos="fade-right"
            className="bg-white p-5 rounded-lg shadow-md"
          >
            <h3 className="font-semibold text-[#0A2540] mb-2">Branding</h3>
            <p className="text-sm text-gray-600">
              Bangun identitas merek kuat.
            </p>
          </div>
          <div
            data-aos="fade-left"
            className="bg-white p-5 rounded-lg shadow-md"
          >
            <h3 className="font-semibold text-[#0A2540] mb-2">
              SEO & Marketing
            </h3>
            <p className="text-sm text-gray-600">
              Strategi digital terukur & efektif.
            </p>
          </div>
        </div>
      </div>
    </section>
  );
}
