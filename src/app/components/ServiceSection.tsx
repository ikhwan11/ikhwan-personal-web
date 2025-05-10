export default function ServicesSection() {
  const services = [
    {
      title: "Web Development",
      desc: "Pembuatan website profesional dan responsive.",
    },
    {
      title: "UI/UX Design",
      desc: "Desain antarmuka yang menarik dan user-friendly.",
    },
    {
      title: "System Design",
      desc: "Rancang bangun sistem digital untuk bisnis Anda.",
    },
    {
      title: "Web Development",
      desc: "Pembuatan website profesional dan responsive.",
    },
    {
      title: "UI/UX Design",
      desc: "Desain antarmuka yang menarik dan user-friendly.",
    },
    {
      title: "System Design",
      desc: "Rancang bangun sistem digital untuk bisnis Anda.",
    },
  ];

  return (
    <section className="relative z-10 pt-24 px-6 py-16 bg-[#F5F7FA]">
      <h2 className="text-3xl font-bold text-center mb-12 text-[#1E90FF]">
        Layanan Kami
      </h2>
      <div className="grid md:grid-cols-3 gap-8">
        {services.map((s, i) => (
          <div
            key={i}
            className="bg-white rounded-lg shadow-lg p-6 text-center"
            data-aos="fade-up"
            data-aos-delay={i * 100}
          >
            <h3 className="text-xl font-semibold mb-3">{s.title}</h3>
            <p className="text-gray-600">{s.desc}</p>
          </div>
        ))}
      </div>
    </section>
  );
}
