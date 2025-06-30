import pandas as pd
from sqlalchemy import create_engine

# Load your patents.csv file
df = pd.read_csv('patents.csv')

# Convert date column
df['publication_date'] = pd.to_datetime(df['publication_date'], errors='coerce')

# Clean column names
df.columns = [col.lower().replace(' ', '_') for col in df.columns]

# Connect to your PostgreSQL database in Docker
engine = create_engine('postgresql://postgres:postgres@db:5432/patents')

# Upload data to the "patents" table
df.to_sql('patents', engine, if_exists='append', index=False)

print("✅ Patent data loaded into PostgreSQL.")
