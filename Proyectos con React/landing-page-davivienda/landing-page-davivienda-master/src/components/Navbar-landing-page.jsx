import { useState } from "react";
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { faBars, faTimes, faInfoCircle, faAward, faClock } from '@fortawesome/free-solid-svg-icons';

const Navbar = () => {
  const [isMenuOpen, setIsMenuOpen] = useState(false);

  const scrollToSection = (sectionId) => {
    const section = document.getElementById(sectionId);
    if (section) {
      section.scrollIntoView({ behavior: "smooth" });
    }
  };

  return (
    <nav className="bg-gradient-to-r from-red-700 to-red-500 p-4 shadow-md">
      <div className="container mx-auto flex justify-between items-center">
        <div className="flex items-center">
          <img className='h-12 mr-2' src="/img/logos/descarga.png" alt="Logo" />
          <span className="text-white font-bold text-lg cursor-pointer" onClick={() => scrollToSection("top")}>Hackathon Davivienda</span>
        </div>

        {/* Botón de menú para pantallas pequeñas */}
        <div className="md:hidden">
          <button className="text-white" onClick={() => setIsMenuOpen(!isMenuOpen)}>
            {isMenuOpen ? (
              <FontAwesomeIcon icon={faTimes} className="text-2xl" />
            ) : (
              <FontAwesomeIcon icon={faBars} className="text-2xl" />
            )}
          </button>
        </div>

        {/* Menú para pantallas grandes */}
        <div className="hidden md:flex space-x-4">
          <button className="text-white hover:text-yellow-400" onClick={() => scrollToSection("title")}>
            <FontAwesomeIcon icon={faInfoCircle} className="mr-2" />
            Acerca del Evento
          </button>
          <button className="text-white hover:text-yellow-400" onClick={() => scrollToSection("timeline")}>
            <FontAwesomeIcon icon={faClock} className="mr-2" />
            Timeline
          </button>
          <button className="text-white hover:text-yellow-400" onClick={() => scrollToSection("descripcion")}>
            <FontAwesomeIcon icon={faAward} className="mr-2" />
            Premios
          </button>
          <button className="text-white hover:text-yellow-400" onClick={() => scrollToSection("requisitos")}>
            <FontAwesomeIcon icon={faInfoCircle} className="mr-2" />
            Requisitos
          </button>
        </div>
      </div>

      {/* Menú desplegable para pantallas pequeñas */}
      {isMenuOpen && (
        <div className="md:hidden">
          <div className="bg-gradient-to-r from-red-700 to-red-500 text-white p-4 z-10">
            <button className="block text-white hover:text-yellow-400 mb-2" onClick={() => scrollToSection("title")}>
              <FontAwesomeIcon icon={faInfoCircle} className="mr-2" />
              Acerca del Evento
            </button>
            <button className="block text-white hover:text-yellow-400 mb-2" onClick={() => scrollToSection("timeline")}>
              <FontAwesomeIcon icon={faClock} className="mr-2" />
              Timeline
            </button>
            <button className="block text-white hover:text-yellow-400 mb-2" onClick={() => scrollToSection("descripcion")}>
              <FontAwesomeIcon icon={faAward} className="mr-2" />
              Premios
            </button>
            <button className="block text-white hover:text-yellow-400 mb-2" onClick={() => scrollToSection("requisitos")}>
              <FontAwesomeIcon icon={faInfoCircle} className="mr-2" />
              Requisitos
            </button>
          </div>
        </div>
      )}
    </nav>
  );
};

export default Navbar;
