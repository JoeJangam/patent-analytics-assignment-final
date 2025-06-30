import pandas as pd

# Load the dataset
df = pd.read_csv("patents.csv")

# Convert publication_date to datetime
df['publication_date'] = pd.to_datetime(df['publication_date'], errors='coerce')
df['publication_year'] = df['publication_date'].dt.year

# Compute stats
summary = {
    'mean_year': df['publication_year'].mean(),
    'median_year': df['publication_year'].median(),
    'std_dev_year': df['publication_year'].std(),
}

print(summary)
