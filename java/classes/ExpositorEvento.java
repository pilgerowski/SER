package classes;

public class ExpositorEvento

{
	/** Attributes */
	private ExpositorCategoria expositorCategoria;
	private Evento evento;
	private Status status;
	private boolean presente;
	private double quantidadeVendida;

	public ExpositorEvento(ExpositorCategoria expCat, Evento evento, 
				Status status, boolean presente, double quantidadeVendida) {
		
		this.expositorCategoria = expCat;
		this.evento = evento;
		this.status = status;
		this.presente = presente;
		this.quantidadeVendida = quantidadeVendida;
	}

	public void setExpositorCategoria(ExpositorCategoria expositor) {
		this.expositorCategoria = expositor;
	}

	public ExpositorCategoria getExpositorCategoria() {
		return this.expositorCategoria;
	}

	public Expositor getExpositor() {
		return this.expositorCategoria.getExpositor();
	}
	
	public void setEvento(Evento evento) {
		this.evento = evento;
	}
	
	public Evento getEvento() {
		return evento;
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
