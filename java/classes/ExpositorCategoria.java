package classes;

public class ExpositorCategoria {

	private Expositor expositor;
	private Categoria categoria;
	private boolean ativo;

	public ExpositorCategoria(Expositor expositor, Categoria categoria) {
		this.setExpositor(expositor);
		this.setCategoria(categoria);
		this.setAtivo(true);
	}

	public void ExpositorCategoria(Expositor expositor, Categoria categoria,
			boolean ativo) {
		this.setExpositor(expositor);
		this.setCategoria(categoria);
		this.setAtivo(ativo);
	}

	/**
	 * Operation
	 * 
	 * @param expositor
	 */
	public void setExpositor(Expositor expositor) {
		this.expositor = expositor;
	}

	public Expositor getExpositor() {
		return this.expositor;
	}

	public void setCategoria(Categoria categoria) {
		this.categoria = categoria;
	}
	
	public Categoria getCategoria() {
		return this.categoria;
	}

	public void setAtivo(boolean ativo) {
		this.ativo = ativo;
	}

	public boolean getAtivo() {
		return this.ativo;
	}
}