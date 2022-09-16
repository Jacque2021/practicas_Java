package com.gestion.productos.repositorio;
import java.util.List;

import org.springframework.data.jpa.repository.JpaRepository;
import org.springframework.data.jpa.repository.Query;
import com.gestion.productos.entidades.Producto;
//PASO 2
public interface ProductoRepositorio extends JpaRepository<Producto, Long>{
	
	//PASO 7
	//busquda
	/*@Query("SELECT p FROM Producto p WHERE p.nombre LIKE %?1% "
			+ "OR p.marca LIKE %?1% "
			+ "OR p.hechoEn LIKE %?1%" )*/
	@Query("SELECT p FROM Producto p WHERE"
			+ " CONCAT(p.id,p.nombre,p.marca,p.hechoEn,p.precio)"
			+ " LIKE %?1%" )
	public List<Producto> findAll(String palabraClave);
	
}
