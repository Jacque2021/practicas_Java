package com.gestion.productos.controlador;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.servlet.ModelAndView;
import org.springframework.web.bind.annotation.ModelAttribute;
import org.springframework.web.bind.annotation.PathVariable;

import com.gestion.productos.entidades.Producto;
import com.gestion.productos.servicio.ProductoServicio;

import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.data.repository.query.Param;

//GESTIONA LAS RUTAS
//PASO 4
@Controller
public class ProductoControlador {
	@Autowired
	private ProductoServicio productoServicio;
	@RequestMapping("/")
	//busquda
	public String verPaginaDeIncio(Model modelo,@Param("palabraClave")String palabraClave) { //paso 9 se agrega el string 
		List<Producto> listaProductos=productoServicio.listAll(palabraClave); //paso 10
		modelo.addAttribute("listaProductos",listaProductos);  //
		modelo.addAttribute("palabraClave",palabraClave);
		return "index";
	}
	
	//6 PARTE
	@RequestMapping("/nuevo")
	public String mostrarFormularioDeRegistrarProductos(Model modelo) {
		Producto producto=new Producto();
		modelo.addAttribute("producto", producto);
		return "nuevo_producto";
	}
	
	@RequestMapping(value ="/guardar", method= RequestMethod.POST)
	public String guardarProducto(@ModelAttribute("producto") Producto producto) {
		productoServicio.save(producto);
		return "redirect:/";
	}
	
	@RequestMapping("/editar/{id}")
	public ModelAndView mostrarFormularioDeEditarProducto(@PathVariable(name= "id")Long id) {
		ModelAndView modelo=new ModelAndView("editar_producto");
		Producto producto=productoServicio.get(id);
		modelo.addObject("producto", producto);
		return modelo;
	}
	
	@RequestMapping("/eliminar/{id}")
	public String eliminarProducto(@PathVariable(name= "id")Long id) {
		productoServicio.delete(id);
		return "redirect:/";
	}
}
	
