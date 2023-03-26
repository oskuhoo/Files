from riotwatcher import *
import pandas as pd

filename = './apikey.txt'

def get_api_key(filename):
    try:
        with open(filename, 'r') as f:
            return f.read().strip()
    except FileNotFoundError:
        print(f'{filename} file not found')

api_key = get_api_key(filename)
watcher = LolWatcher(filename)

region = 'euw1'
queues = watcher.data_dragon.queues('11.20.1')
aram_queue_id = None
for queue in queues:
    if queue['description'] == 'ARAM':
        aram_queue_id = queue['queueId']
        break

matches_data = []
for i in range(0, 10000, 100):  # 10k mathces
    matchlist = watcher.match.matchlist(region, queue=aram_queue_id, begin_index=i)
    for match_reference in matchlist['matches']:
        match = watcher.match.by_id(region, match_reference['gameId'])
        matches_data.append(match)

matches_df = pd.json_normalize(matches_data)

aram_matches_df = matches_df[matches_df['gameMode'] == 'ARAM']

aram_matches_df.to_csv('aram_matches_euw.csv', index=False)