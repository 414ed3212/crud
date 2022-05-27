import React from 'react'
import { BrowserRouter, Routes, Route, Link } from 'react-router-dom'
import Modal from "./Modal"
import Main from "./Main"
import ERoute from "./ERoute"
const CRoutes = () => {
  return (
    <nav>
      <BrowserRouter>
        <ul className='nav--ul'>
          <li>
            <Link to="/" className='nav--link'>Home</Link>
          </li>
          <li>
            <Link to="/add" className='nav--link'>Add</Link>
          </li>
        </ul>
        <Routes>
          <Route path="/" element={<Main />} ></Route>
          <Route path="/add" element={<Modal />}></Route>
          <Route path="*" element={<ERoute />}></Route>
        </Routes>
      </BrowserRouter>
    </nav>
  )
}
export default CRoutes

