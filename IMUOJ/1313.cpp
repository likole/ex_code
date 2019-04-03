#include<iostream>
using namespace std;
int maze[202][202], book[202][202], sx, sy, ex, ey, minstep = 99999;
void DFS(int step, int x, int y)
{
	if (x == ex&&y == ey)
	{
		if (step < minstep)minstep = step;
		return;
	}
	int next[4][2] =
	{
		0,1,
		1,0,
		0,-1,
		-1,0
	};
	int tx, ty;
	for (int i = 0; i < 4; i++)
	{
		tx = x + next[i][0];
		ty = y + next[i][1];
		if (maze[tx][ty] == 0 && book[tx][ty] == 0)
		{
			book[tx][ty] = 1;
			DFS(step + 1, tx, ty);
			book[tx][ty] = 0;
		}
	}
}
int main()
{
	int n, m, t;
	cin >> t;
	while (t--)
	{
		cin >> n >> m;
		if (n == 0 && m == 0 && t == 0)break;
		char tmp;
		//reset
		minstep = 99999;
		for (int i = 0; i <= m; i++)
		{
			for (int j = 0; j <= n; j++)
			{
				book[i][j] = 0;
			}
		}
		//ini the maze
		for (int i = 1; i <= m; i++)
		{
			for (int j = 1; j <= n; j++)
			{
				maze[i][j] = 0;
				cin >> tmp;
				if (tmp == '#') maze[i][j] = 1;
				else if (tmp == 'S')
				{
					sx = i;
					sy = j;
				}
				else if (tmp == 'E')
				{
					ex = i;
					ey = j;
				}
			}
		}
		for (int i = 0; i <= n + 1; i++)
		{
			maze[0][i] = 1;
			maze[m + 1][i] = 1;
		}
		for (int i = 0; i <= m + 1; i++)
		{
			maze[i][0] = 1;
			maze[i][n + 1] = 1;
		}
		//main process
		DFS(0, sx, sy);
		cout << minstep << endl;
	}
	return 0;
}