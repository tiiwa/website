defmodule LesCreator.Mixfile do
  use Mix.Project

  def project do
    [app: :les_creator,
     version: "0.1.0",
     build_path: "../../_build",
     config_path: "../../config/config.exs",
     deps_path: "../../deps",
     lockfile: "../../mix.lock",
     elixir: "~> 1.6.1",
     elixirc_paths: elixirc_paths(Mix.env),
     build_embedded: Mix.env == :prod,
     start_permanent: Mix.env == :prod,
     deps: deps()]
  end

  # Configuration for the OTP application
  #
  # Type "mix help compile.app" for more information
  def application do
    [
      applications: [:logger, :ex_statsd, :kafka_ex, :les_repository, :lru_cache],
      mod: {LesCreator, []},
    ]

  end

  defp elixirc_paths(:test), do: ["lib", "test/support"]
  defp elixirc_paths(_),     do: ["lib"]

  # Dependencies can be Hex packages:
  #
  #   {:mydep, "~> 0.3.0"}
  #
  # Or git/path repositories:
  #
  #   {:mydep, git: "https://github.com/elixir-lang/mydep.git", tag: "0.1.0"}
  #
  # Type "mix help deps" for more examples and options
  defp deps do
    [
      {:mock, "~> 0.1.1", only: :test},
      {:kafka_ex, "~> 0.5.0"},
      {:ex_statsd, github: "PagerDuty/ex_statsd", ref: "a5c1aefd1d8d273e3910c2ae53c034669f792400"}, # Pulling in Cees' socket open fix
      {:poison, "~> 2.2"},
      {:les_repository, in_umbrella: true},
      {:les_common, in_umbrella: true},
      {:lru_cache, "~> 0.1.0"},
      {:credo, "~> 0.3", only: [:dev, :test]},
      {:apex, "~>1.2.0", only: [:dev, :test]},
      {:murmur, "~> 1.0"},
    ]
  end
end
