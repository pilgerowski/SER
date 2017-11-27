package classes;

public class ExpositorEvento

{
	/** Attributes */
	private ExpositorCategoria expositorCategoria;
	private Status status;
	private boolean presente;
	private double quantidadeVendida;

	public ExpositorEvento() {

	}

	public void setExpositorCategoria(ExpositorCategoria expositor) {
		this.expositorCategoria = expositor;
	}

	public ExpositorCategoria getExpositorCategoria() {
		return this.expositorCategoria;
	}

	public void setExpositor(Expositor expositor, Categoria categoria) {

	}

	public Expositor getExpositor() {
		return this.expositorCategoria.getExpositor();
	}

	public void setStatus(Status status) {
		this.status = status;
	}

	public Status getStatus() {
		return this.status;
	}

	public void setPresente(boolean presente) {
		this.presente = presente;
	}

	public boolean getPresente() {
		return this.presente;

	}

	public void setQuantidadeVendida(double quantidade) {
		this.quantidadeVendida = quantidade;
	}

	public double getQuantidadeVendida() {
		return this.quantidadeVendida;
	}
}
