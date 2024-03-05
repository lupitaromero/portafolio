import Title from "./components/Title";
import Footer from "./components/Footer";
import Navbar from "./components/Navbar-landing-page";
import Timeline from "./components/Timeline";
import Descripcion from "./components/Descripcion";
import Requisitos from "./components/Requisitos";
import BotonInscripcion from "./components/BotonInscripcion";
import Reto from "./components/Reto";
import Carrusel_Universidades from "./components/Carrousel_Universidades";
import 'tailwindcss/tailwind.css';

function App() {
  return (
    <>
      <Navbar/>
      <Title />
      <Reto />
      <Timeline />
      <Descripcion/>
      <Requisitos/>
      <BotonInscripcion/>
      <Carrusel_Universidades />
      <Footer />
    </>
  );
};

export default App;
