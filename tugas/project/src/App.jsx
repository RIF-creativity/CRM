import { BrowserRouter as Router, Routes, Route } from 'react-router-dom';
import './App.css';
import Dasboard from './pages/Dasboard'
import Promo from './pages/Promo'
import Costumer from './pages/Costumer'
import Produk from './pages/Produk'
import Transaksi from './pages/Transaksi'

function App() {
  return (
    <Router>
      <Routes>
        <Route path='/' element={<Dasboard />} />
        <Route path='/Produk' element={<Produk />} />
        <Route path='/Costumer' element={<Costumer />} />
        <Route path='/Promo' element={<Promo />} />
        <Route path='/Transaksi' element={<Transaksi />} />
      </Routes>
    </Router>
  );
}

export default App;
